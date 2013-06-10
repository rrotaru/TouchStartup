<?php require_once("header.php"); ?>

<?php
  $userID = $_GET["userID"];
  //$sql = "SELECT u.imageLink,e.firstName,e.lastName,e.occupation,e.location,c.companyName,c.companyDesc,c.location FROM users u,employees e,company c WHERE u.userID=e.userID and u.userID=c.userID and u.userID='".$userID."'limit 1 
//  ";
  $sql="SELECT users.imageLink, employees.firstName, employees.lastName, employees.location, employees.occupation FROM employees  INNER JOIN users ON (users.userID = employees.userID)
WHERE employees.userID ='".$userID."' 

UNION 

SELECT users.imageLink,company.companyName, null as lastName, company.location, company.companyDesc as occupation from company INNER JOIN users ON (users.userID = company.userID)
WHERE company.userID='".$userID."' 

"
;

/*test if the user is loggedin*/
 if (!(isset($_SESSION['username']) && isset($_SESSION['userID'])))
 {
 $rows = $conn->query($sql);
  foreach ($rows as $row) 
  {
     echo "
      
      <div class='section group'>
        <div class='col span_1_of_3'>
          <h2>".$row['firstName']." ".$row['lastName']."</h2>
        </div>
        
        <div class='col span_2_of_3'>
          <h2>Info</h2>
        </div>
      
      </div>
      
      <div class='section group'>
        <div class='col span_1_of_3'>
          <img id='profile-image' src='".$row['imageLink']."'/>
        </div>
        <div class='col span_2_of_3'>
          <h3>".$row['occupation']."</h3>
          <h4> ".$row['location']."</h4>
          <br><br>
          About me
        </div>
       
        
      </div>";
  }


      
 }
else
{
	/* this will determine what type of user account is logged in:employee or company */
$sql2 = "SELECT users.userID FROM users INNER JOIN employees ON (users.userID = employees.userID) WHERE users.userID = :userID";

try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":userID", $_SESSION['userID'], PDO::PARAM_STR );
$st->execute();
$test=$st->fetch();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

if($test == null){
$userType = "Company";
}

else{
$userType = "Employee";
}
  
  try { 
    if($userType == "Company"){
    
    $rows = $conn->query($sql);
    foreach ($rows as $row) {
      echo "
      
      <div class='section group'>
        <div class='col span_1_of_3'>
          <h2>".$row['firstName']." ".$row['lastName']."</h2>
        </div>
        
        <div class='col span_1_of_3'>
          <h2>Info</h2>
        </div>
        
        <div class='col span_1_of_3'>
         <h2>Tools<h2>
        </div> 
        
      </div>
      
      <div class='section group'>
        <div class='col span_1_of_3'>
          <img id='profile-image' src='".$row['imageLink']."'/>
        </div>
        <div class='col span_1_of_3'>
          <h3>".$row['occupation']."</h3>
          <h4> ".$row['location']."</h4>
          <br><br>
          About me
        </div>
        <div class='col span_1_of_3'>
         <a href='viewMyPostedJobs.php'>My Posted Jobs</a>
         <br>
         <a href='postingJob.html'>Post a new Job</a>
         <br>
         <a href='#'>Browse Talent</a>
        </div> 
        
      </div>

      ";
    }   
   }
    else{  
    $rows = $conn->query($sql);
    foreach ($rows as $row) {
      echo "
      
      <div class='section group'>
        <div class='col span_1_of_3'>
          <h2>".$row['firstName']." ".$row['lastName']."</h2>
        </div>
        
        <div class='col span_1_of_3'>
          <h2>Info</h2>
        </div>
        
        <div class='col span_1_of_3'>
         <h2>Tools<h2>
        </div> 
        
      </div>
      
      <div class='section group'>
        <div class='col span_1_of_3'>
          <img id='profile-image' src='".$row['imageLink']."'/>
        </div>
        <div class='col span_1_of_3'>
          <h3>".$row['occupation']."</h3>
          <h4> ".$row['location']."</h4>
          <br><br>
          About me
        </div>
        <div class='col span_1_of_3'>
         <a href=''>Jobs I've Applied To</a>
         <br>
         <a href='jobslisting.php'>Browse Jobs</a>
         <br>
         <a href=''>Edit my Profile</a>
        </div> 
        
      </div>

      ";      
       
    }
  } 
   }catch (PDOException $e) {
    echo "QUery failed: " . $e->getMessage();
  }
} 



?>




<?php require_once("footer.php"); ?>