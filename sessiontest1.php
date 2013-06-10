<?php
// page1.php

session_start();

?>

<?php require_once('header.php'); ?>

<?php

echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Works if session cookie was accepted
echo '<br /><a href="sessiontest2.php">page 2</a>';

// Or maybe pass along the session id, if needed
echo '<br /><a href="sessiontest2.php?' . SID . '">page 2</a>';
?>

<?php require_once('footer.php'); ?>