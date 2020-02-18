<?php
$q = $_REQUEST["q"];
$tname = $_REQUEST["tname"];
$servername = "localhost";
$username = "root";
$dbname = "mydb";
$password = null;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($q == 1) {
    echo $tname . "<br>";
    echo $q . "<br>";
    $sql = "CREATE TABLE " . $tname .
        " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating Table: " . $conn->error;
    }
} else {
    $sql = "DROP TABLE " . $tname;
    if ($conn->query($sql) === TRUE) {
        echo "Table deletion successfully";
    } else {
        echo "Error deleting Table: " . $conn->error;
    }
};
$conn->close();
