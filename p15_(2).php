<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();
session_destroy();

// Delete the cookie by setting its expiration time in the past
if (isset($_COOKIE['user'])) {
    setcookie("user", "", time() - 3600, "/"); // Expire the cookie
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and Cookie Destroyed</title>
</head>
<body>
    <h2>Session and Cookie Destroyed</h2>

    <p>The session has been destroyed and the cookie has been deleted.</p>
    <a href="p15.php">Go back to session and cookie page</a>
</body>
</html>
