<?php
    /* Checks authorization of session cookie to ensure a valid login session */
    
    session_start();
    
    $timeout = 60 * 30; // In seconds, i.e. 30 minutes.
    $fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

    if (    (isset($_SESSION['last_active']) && $_SESSION['last_active']<(time()-$timeout))
         || (isset($_SESSION['fingerprint']) && $_SESSION['fingerprint']!=$fingerprint)
         || isset($_GET['logout'])
        )
    {
        setcookie(session_name(), '', time()-3600, '/');
        session_destroy();
    }
    session_regenerate_id(); 
    $_SESSION['last_active'] = time();
    $_SESSION['fingerprint'] = $fingerprint;
    // User authenticated at this point (i.e. $_SESSION['email_address'] can be trusted).
?>