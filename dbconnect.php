<?php
$mysqli = new mysqli("localhost", "cron", "1234", "asterisk");

if ($mysqli->connect_errno) {
    die("DB connection failed: " . $mysqli->connect_error);
}
?>
