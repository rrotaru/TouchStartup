<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">

<?php

$sql = "INSERT INTO users (userID, username, password, email, websiteURL, imageLink)
VALUES(:userID, :username, :password, :email, :websiteURL, :imageLink)";

$sql2 = "INSERT INTO company (companyID, companyName, location, companyDesc, userID)
VALUES(:companyID, :companyName,:location,:companyDesc, :userID)";

$hashedpassword=md5($_POST["pass"]);
$userID=md5(uniqid($_POST["user_name"]));
$companyID=md5(uniqid($_POST["company_name"]));

$imageLink = 'images/default_user.png';

// Checks if the user uploaded a photo
if (isset($_FILES["image"]["size"]) && $_FILES["image"]["size"] > 0 ) {
  $imageLink = "images/" . basename($_FILES["image"]["name"]);
  // Moves photo to directory on server.
  move_uploaded_file($_FILES["image"]["tmp_name"], $imageLink);
}

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":userID", $userID, PDO::PARAM_STR );
$st->bindValue( ":username", $_POST["user_name"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
$st->bindValue( ":email", $_POST["email"], PDO::PARAM_STR );
$st->bindValue( ":websiteURL", $_POST["website_URL"], PDO::PARAM_STR );
$st->bindValue( ":imageLink", $imageLink, PDO::PARAM_STR );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":companyID", $companyID, PDO::PARAM_STR );
$st->bindValue( ":companyName", $_POST["company_name"], PDO::PARAM_STR );
$st->bindValue( ":location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":companyDesc", $_POST["company_desc"], PDO::PARAM_STR );
$st->bindValue( ":userID", $userID, PDO::PARAM_STR );
$st->execute();
} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>

	<h4>Employer Registration Complete</h4>
	<p>Thank You for joining us.<p>

    <dl>
      <dt>Company Name:</dt><dd><?php echo $_POST["companyName"]?></dd>
      <dt>Location:</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Description:</dt><dd><?php echo $_POST["companyDesc"]?></dd>
      <dt>User ID:</dt><dd><?php echo $_POST["userID"]?></dd>
      <dt>Website:</dt><dd><?php echo $_POST["websiteURL"]?></dd>
      <dt>Photo:</dt><dd><?php echo "<img src='".$imageLink."'/>" ?></dd>
    </dl>


         </div>
      </div>
<?php require_once("footer.php"); ?>