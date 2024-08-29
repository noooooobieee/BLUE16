<?php

$servername = "sql301.infinityfree.com";
$username = "if0_36017942";
$password = "IG51RzTAAE";
$dbname = "if0_36017942_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
