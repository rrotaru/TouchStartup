<?php
    /* Logs the user out by destroying the session cookie and redirecting to homepage */
    
    require_once('sessionauth.php');

    setcookie(session_name(), '', time()-3600, '/');
    session_destroy();
   
    header("Location: index.html");
?>
<!--<?php require_once('sessionauth.php'); ?>-->

<!--Logout script-->