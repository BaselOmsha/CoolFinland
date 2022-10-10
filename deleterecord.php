<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "coolFinland";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$delivery_id = $_GET['delivery_id'];

// sql to delete a record
$sql = "DELETE FROM deliveries WHERE delivery_id='" . $delivery_id . "'";

if ($conn->query($sql) === TRUE) {
    header("Location: main.php#first");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
