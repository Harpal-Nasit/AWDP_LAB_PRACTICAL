<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1 style="color:red;">Programm:14</h1>
    <h2>Registration Form</h2>
    <form method="POST" action="p14.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Submit using POST">
    </form>

    <h2>Search Form (GET method)</h2>
    <form method="GET" action="p14.php">
        <label for="query">Search by Name:</label>
        <input type="text" id="query" name="query" required><br><br>
        
        <input type="submit" value="Submit using GET">
    </form>

    <?php
    // Handle POST request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h3>POST Method Data</h3>";
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);
        
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Age: " . $age . "<br>";
    }

    // Handle GET request
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['query'])) {
        echo "<h3>GET Method Data</h3>";
        $query = htmlspecialchars($_GET['query']);
        echo "Search Query: " . $query . "<br>";
    }
    ?>
</body>
</html>
