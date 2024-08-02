<?php

include ('config.php');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
