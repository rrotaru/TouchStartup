<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">
	
<?php

$sql = "INSERT INTO users (userID, username, password, email, websiteURL, imageLink)
VALUES(:userID, :username, :password, :email, :websiteURL, :imageLink)";

$sql2 = "INSERT INTO employees (employeeID, firstName, lastName, location, occupation, userID)
VALUES(:employeeID, :firstName, :lastName, :location,:occupation, :userID)"; 

// A hash of the user password
$hashedpassword=md5($_POST["pass"]);

// The unique employee ID that links their user table info to employee table info
// Employee is just a term for a standard, non-company user.
$employeeID=md5(uniqid($_POST["lastName"].$_POST["firstName"]));

// The unique user ID that all accounts must have
$userID=md5(uniqid($_POST["username"]));

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
$st->bindValue( ":username", $_POST["username"], PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
$st->bindValue( ":email", $_POST["email"], PDO::PARAM_STR );
$st->bindValue( ":websiteURL", $_POST["websiteURL"], PDO::PARAM_STR );
$st->bindValue( ":imageLink", $imageLink, PDO::PARAM_STR );
$st->execute();

} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

try {
$st = $conn->prepare( $sql2 );
$st->bindValue( ":employeeID", $employeeID, PDO::PARAM_STR );
$st->bindValue( ":firstName", $_POST["firstName"], PDO::PARAM_STR );
$st->bindValue( ":lastName", $_POST["lastName"], PDO::PARAM_STR );
$st->bindValue( ":location", $_POST["location"], PDO::PARAM_STR );
$st->bindValue( ":occupation", $_POST["occupation"], PDO::PARAM_STR );
$st->bindValue( ":userID", $userID, PDO::PARAM_STR );
$st->execute();

} catch ( PDOException $e ) {
echo "Query failed: " . $e->getMessage();
}

?>
	<h4>Prospective Employee Registration Complete</h4>
	<p>Thank You for joining us.<p>

    <dl>
      <dt>First name:</dt><dd><?php echo $_POST["firstName"]?></dd>
      <dt>Last name:</dt><dd><?php echo $_POST["lastName"]?></dd>
      <dt>City:</dt><dd><?php echo $_POST["location"]?></dd>
      <dt>Occupation:</dt><dd><?php echo $_POST["occupation"]?></dd>
      <dt>Email:</dt><dd><?php echo $_POST["email"]?></dd>
      <dt>Website:</dt><dd><?php echo $_POST["websiteURL"]?></dd>
      <dt>User ID:</dt><dd><?php echo $_POST["username"]?></dd>
      <dt>Photo:</dt><dd><?php echo "<img src='".$imageLink."'/>" ?></dd>
    </dl>
         </div>
      </div>
<?php require_once("footer.php"); ?>