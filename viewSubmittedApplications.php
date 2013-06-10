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
 
 while($row2=$st->fetch()){
 
 $jobID = $row2['id'];

 if($_POST['viewApplicants'.$jobID.''])
 
 $sql3 = "SELECT * FROM applications WHERE jobID = :jobID";
 
 try {
 $st = $conn->prepare( $sql3 );
 $st->bindValue( ":jobID", $jobID, PDO::PARAM_STR );
 $st->execute();
 } catch ( PDOException $e ) {
 echo "Query failed: " . $e->getMessage();
 }
 
 
 
 
 
 

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

 $sql2 = "SELECT title, type, location FROM jobs WHERE companyID = :companyID";

 try {
 $st = $conn->prepare( $sql2 );
 $st->bindValue( ":companyID", $row['companyID'], PDO::PARAM_STR );
 $st->execute();
 } catch ( PDOException $e ) {
 echo "Query failed: " . $e->getMessage();
 }
 
 while($row2=$st->fetch());
  if($row2 == null){
 
 }
 
 else{
 echo "<table>
       <tr>
        <th>Job Title</td>
        <th>Type</td>
        <th>Location</td>";
 echo  "<tr>";
 echo   "<td>".$row2['title']."</td>";
 echo   "<td>".$row2['type']."</td>";
 echo   "<td>".$row2['location']."</td>";
 echo   "<td><button>View Applicants</button></td>";
 
 while($row2=$st->fetch()){

 echo  "<tr>";
 echo   "<td>".$row2['title']."</td>";
 echo   "<td>".$row2['type']."</td>";
 echo   "<td>".$row2['location']."</td>";
 echo   "<td><button>View Applicants</button></td>";
 }
 
 echo "</table>";
 
 }
 
}

$sql3 = "SELECT * FROM applications WHERE jobID = :jobID";

try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":jobID", $jobID, PDO::PARAM_STR );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>

<?php require_once("footer.php"); ?>