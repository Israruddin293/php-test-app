<?php
include('config.php');

// Database connection settings
$servername = DB_HOST; // Use the DB_HOST from config.php
$username = DB_USER;
$password = DB_PASS;
$dbname = DB_NAME;


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No records found</td></tr>";
}

$conn->close();
?>
