<?php 
session_start();
$_SESSION['jobID']=$_GET["id"]; 
require_once("header.php");
?>



    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3" style="padding: 1em;">
	
    <?php
   
    $jobid=$_GET["id"];  
    
    $sql = "SELECT * FROM jobs where id=".$jobid."";

    try {
      $rows = $conn->query($sql);
      foreach($rows as $row) {

        echo " <dl>
      <dt>Job Title</dt><dd><h3>".$row['title']."</h3></dd>
      <h4>Job Details</h4>
	    <p>Details about this job.<p>
      <dt>Job Type</dt><dd>".$row['type']."</dd>
      <dt>Location</dt><dd>".$row['location']."</dd>
      <dt>Company</dt><dd>".$row['company']."</dd>
      <dt>Company_description</dt><dd>".$row['company_description']."</dd>
      <dt>Job description</dt><dd>".$row['job_description']."</dd>
      <dt>Skills Required</dt><dd>".$row['skills']."</dd>
      <dt>Posted Date</dt><dd>".$row['postingDate']."</dd>
      <dt>Contact Person</dt><dd>".$row['contact_name']."</dd>
      <dt>Email Address</dt><dd>".$row['contact_email']."</dd>
      
    </dl>

    "
         
	;
	  }
    } catch (PDOException $e) {
      echo "Query failed: " . $e->getMessage();
    }
    echo "</table>";
    $conn = null;
	  ?>
    
      <form method="post" action="apply.html" >
  <input type="submit" name="submit" value="Apply for this Job">
  </form>
  
  <div class="fb-like" data-href="http://www.gibsanabdu.com/jobs/newhome.html" data-send="true" data-width="450" data-show-faces="true"></div>
 </div>
 </div>
<?php require_once("footer.php"); ?>