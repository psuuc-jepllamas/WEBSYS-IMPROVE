<?php

include_once 'conn.php';

$username = $_POST['username'];
$userpassword = $_POST['password'];
$address = $_POST['address'];
$campus = $_POST['campus'];
$birthdate = $_POST['birthdate'];

$sql = "INSERT INTO `useracct`(`name`, `password`, `address`, `campus`, `birthdate`) VALUES ('$username','$userpassword','$address','$campus','$birthdate');";
mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {
        header('Location: login.php');
        exit();
}
?>