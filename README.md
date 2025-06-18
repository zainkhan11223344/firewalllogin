<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: http://your-ip:81/login.php");  // Replace IP
    exit;
}
?>
Add on Vicidial Welcome Page
