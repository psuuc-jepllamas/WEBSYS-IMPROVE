<?php
    $localhost = "localhost";
    $userid = "root";
    $password = "";
    $database = "lab_activity_5";

    try {
        $conn = new mysqli($localhost, $userid, $password, $database);
    } catch (mysqli_sql_exception) {
        echo "Couldn't connect to the database.";
    }
?>