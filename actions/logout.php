<?php
    require_once 'auth.php';

    // Log user logout activity
    log_activity($conn, $uid, 'logout', "Logged out");

    // Clear session data and destroy session
    session_unset();
    session_destroy();

    // Redirect to login page
    header('location: /isko-system/log-in/login.php');
?>