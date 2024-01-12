<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "lab_activity_5";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
