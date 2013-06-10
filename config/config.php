<?php
$db_host = "YOUR_HOST";
$db_user = "YOUR_USER";
$db_pass = "YOUR_PASS";
$db_name = "YOUR_DB_NAME";
$dsn = "mysql:dbname=YOUR_DB_NAME";

// Connection
try {
    $conn = new PDO($dsn, $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
