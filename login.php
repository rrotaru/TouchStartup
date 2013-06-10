<?php
/* Logs user in and redirects to homepage */

// Cookie authorization and database connection/configuration
require_once('sessionauth.php');
require_once('config/config.php');

$username = $_POST["user"];
$hashedpassword = md5($_POST["pass"]);
$sql = "SELECT * FROM users WHERE username='".$username."' and password='".$hashedpassword."'";

try {
$st = $conn->prepare( $sql );
$st->bindValue( ":username", $username, PDO::PARAM_STR );
$st->bindValue( ":password", $hashedpassword, PDO::PARAM_STR );
$st->execute();
$row=$st->fetch();
// Store userID for session setup.
$ID = $row['userID'];
} catch ( PDOException $e ) {
//echo "Query failed: " . $e->getMessage();  <-- Send this and all other error messages back to index.html via POST.
}

// Check if username/password matches a row in the database
if($row != null){
//echo "Welcome, ";
//echo $username;

// Set up fingerprint and session cookie information
$fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
$_SESSION['last_active'] = time();
$_SESSION['fingerprint'] = $fingerprint;
$_SESSION['username'] = $username;
$_SESSION['userID'] = $ID;
}

// create error handler
$errors = array();
if (!$username){
$errors[1]= " invalid user name";
}
if (!$hashedpassword ){
$errors[2] = "invalid password";
}

// Redirect to homepage.
header("Location: index.html");

/* WE ARE NOT USING PERSISTENT COOKIES SO THIS SHOULD REMAIN COMMENTED FOR NOW
// to creating a cookies  for both username and password  in hour time gibsan code 
$hour = time() + 3600;
setcookie('ID_MY-Site', $_POST['user'], $hour);
setcookie('KEY_MY_Site', md5($_POST['pass']), $hour);

//then redirect them to the members area
header("Location:header.php");

// creates a new cookes for a year time for both
$year = time() + 31536000;
setcookie('remember_me', $_POST['user'], $year);
setcookie('remember_mepass', $_POST['pass'], $year);


// to keep username and password
if($_POST['remember']) {
setcookie('remember_me', $_POST['user'], $year);
setcookie('remember_mepas', $_POST['pass'], $year);
}
elseif(!$_POST['remember']) {
	if(isset($_COOKIE['remember_me'])) {
		$past = time() - 100;
		setcookie(remember_me, gone, $past);
	}
}*/
?>
