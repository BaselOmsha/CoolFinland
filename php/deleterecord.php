<?php
include "../conn/conn.php";
$delivery_id = $_GET['delivery_id'];

// sql to delete a record
$sql = "DELETE FROM deliveries WHERE delivery_id='" . $delivery_id . "'";

if ($connection->query($sql) === TRUE) {
    header("Location: main.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();