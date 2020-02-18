<?php
$q = $_REQUEST["q"];
$servername = "localhost";
$username = "root";
$password = null;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database

if ($q == true) {
$sql = "CREATE DATABASE Test3DB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
}
else {
    $sql = "DELETE DATABASE Test3DB";
if ($conn->query($sql) === TRUE) {
    echo "Database deletion successfully";
} else {
    echo "Error deleting database: " . $conn->error;
}
}

$conn->close();

echo "<br> Connection Closed"
