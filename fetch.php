<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "your_database_name"; // Change this to your database name

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
