<?php
// Starting Session
session_start();

// Storing Session
$login_session = $_SESSION['login_user'];

if (!isset($login_session)) {
    mysql_close($connection); // Closing Connection
    header('location: index.php'); // Redirecting To Home Page
}
?>