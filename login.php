<?php
session_start();
require_once("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST["username"]);
    $password = $mysqli->real_escape_string($_POST["password"]);

    $query = "SELECT user FROM vicidial_users WHERE user='$username' AND pass='$password'";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows == 1) {
        $_SESSION["loggedin"] = true;
        header("Location: http://your-ip/");  // replace your-ip
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
