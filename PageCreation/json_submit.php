<?php
$q = $_REQUEST["q"];
$strJSON = $_REQUEST["str"];
$servername = "localhost";
$username = "root";
$dbname = "mydb";
$password = null;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($q == 1) {
    // Decoding 
   $StrPHP = json_decode($strJSON);
    $sql = "INSERT INTO  pfill (p1, p2, author)
    VALUES (" . "'" . $StrPHP->p1 . "'" . ",'" . $StrPHP->p2 . "'" . ",'" . $StrPHP->author. "')";
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error editing Table: " . $conn->error;
    }
}
$conn->close();