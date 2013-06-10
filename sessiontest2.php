<?php
// page2.php

session_start();
?>

<?php require_once('header.php'); ?>


<?php

echo 'Welcome to page #2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

// You may want to use SID here, like we did in page1.php
echo '<br /><a href="sessiontest1.php">page 1</a>';
?>

<?php require_once('footer.php'); ?>