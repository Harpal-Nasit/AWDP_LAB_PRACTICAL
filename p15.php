<?php
// Start the session
session_start();

// Set session variables
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Pal";
    $_SESSION['email'] = "xyz@example.com";
}

// Set cookies (name, value, expiration time: 1 hour)
if (!isset($_COOKIE['user'])) {
    setcookie("user", "Pal", time() + (3600), "/"); // 1 hour expiry
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and Cookie Example</title>
</head>
<body>
    <h1 style="color:red;">Prodramm:15<h1>
    <h2>Session and Cookie Example</h2>

    <h3>Session Data:</h3>
    <?php
    // Display session variables
    if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
        echo "Username: " . $_SESSION['username'] . "<br>";
        echo "Email: " . $_SESSION['email'] . "<br>";
    } else {
        echo "No session data available.<br>";
    }
    ?>

    <h3>Cookie Data:</h3>
    <?php
    // Display cookie value
    if (isset($_COOKIE['user'])) {
        echo "Cookie 'user': " . $_COOKIE['user'] . "<br>";
    } else {
        echo "No cookie data available.<br>";
    }
    ?>

    <br>
    <a href="p15_(2).php">Click here to destroy session and delete cookie</a>
</body>
</html>
