
<?php require_once("header.php"); ?>
/*Job posting By Yan*/
    <h1>Thank You</h1>

    <p>Thank you for your time. Here is the job information you submitted:</p>

    <dl>
      <dt>Job Title</dt><dd><?php echo $_POST["jobTitle"]?></dd>
      <dt>Job Type</dt><dd><?php echo $_POST["jobType"]?></dd>
      <dt>Location</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Company Name</dt><dd><?php echo $_POST["companyName"]?></dd>
      <dt>Company Description</dt><dd><?php echo $_POST["companyDescription"]?></dd>
      <dt>Job Description</dt><dd><?php echo $_POST["jobDescription"]?></dd>
      <dt>Skills Required</dt><dd><?php echo $_POST["skills"]?></dd>
      <dt>Posting Date</dt><dd><?php echo $_POST["postingDate"]?></dd>
      <dt>Contact Person</dt><dd><?php echo $_POST["contactPerson"]?></dd>
      <dt>E-mail</dt><dd><?php echo $_POST["email"]?></dd>
      
    </dl>


<!--Robert:PHP handing data input into database-->
<?php

/*get the company ID*/ 
$sql2 = "SELECT companyID from company WHERE userID=" . $_SESSION['userID'] . "";
try{
$rows = $conn->query( $sql2 );
foreach ( $rows as $row ) {
$companyID = $row["companyID"];
}
}
catch ( PDOException $e ) {
echo “Query failed: “ . $e->getMessage();
}
$conn = null;



$sql = "INSERT INTO jobs (title, type, location, company, company_description, job_description, skills, date, companyID, contact_name, contact_email) VALUES (:title, :type, :location, :company, :company_description, :job_description, :skills, :date,:companyID ,:contact_name, :contact_email)";
try {
$st = $conn->prepare( $sql );
$st->bindValue( ":title", $_POST["jobTitle"], PDO::PARAM_STR );
$st->bindValue( ":type", $_POST["jobType"], PDO::PARAM_STR );
$st->bindValue( ":location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":company", $_POST["companyName"], PDO::PARAM_STR );
$st->bindValue( ":company_description", $_POST["companyDescription"], PDO::PARAM_STR );
$st->bindValue( ":job_description", $_POST["jobDescription"], PDO::PARAM_STR );
$st->bindValue( ":skills", $_POST["skills"], PDO::PARAM_STR );
$st->bindValue( ":date", $_POST["postingDate"], PDO::PARAM_STR );
$st->bindValue( ":companyID", $companyID, PDO::PARAM_STR );
$st->bindValue( ":contact_name", $_POST["contactPerson"], PDO::PARAM_STR );
$st->bindValue( ":contact_email", $_POST["email"], PDO::PARAM_STR );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}
?>

<?php require_once("footer.php"); ?>