<?php
require_once("header.php");
?>

<?php

$sql = "SELECT companyID FROM company WHERE userID = :userID";

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":userID", $_SESSION['userID'], PDO::PARAM_STR );
$st->execute();
$row=$st->fetch();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

if($row == null){
echo "Your account is not associated with any company";
}

else{

 $sql2 = "SELECT id, title, type, location FROM jobs WHERE companyID = :companyID";

 try {
 $st = $conn->prepare( $sql2 );
 $st->bindValue( ":companyID", $row['companyID'], PDO::PARAM_STR );
 $st->execute();
 } catch ( PDOException $e ) {
 echo "Query failed: " . $e->getMessage();
 }
 
 $_SESSION['myJobsList']=$st;
 
 $row2=$st->fetch();
 if($row2 == null){
 echo "You have not posted any jobs.";
 }
 
 else{
 
 echo "<form action='viewSubmittedApplications.php' method='post'>
       <table>
       <tr>
        <th>Job Title</td>
        <th>Type</td>
        <th>Location</td>";
 echo  "<tr>";
 echo   "<td>".$row2['title']."</td>";
 echo   "<td>".$row2['type']."</td>";
 echo   "<td>".$row2['location']."</td>";
 echo   "<td><input type='submit' name='viewApplications".$row2['id']."' value='View Applicants'></td>";
 
 while($row2=$st->fetch()){

 echo  "<tr>";
 echo   "<td>".$row2['title']."</td>";
 echo   "<td>".$row2['type']."</td>";
 echo   "<td>".$row2['location']."</td>";
 echo   "<td><input type='submit' name='viewApplications".$row2['id']."' value='View Applicants'></td>";
 }
 
 echo "</table>
       </form>";
 
 }
 
}

?>

<?php require_once("footer.php"); ?>