<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $thumbname = $_POST['thumbname'];
    $imagePath = $_POST['image_path'];
    $description = $_POST['description'];
    $createdAt = $_POST['created_at'];


    require 'conn.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to delete the thumbnail
    $sql = "DELETE FROM thumbnails WHERE image_path = '$imagePath' AND thumbname = '$thumbname' AND description = '$description' AND created_at = '$createdAt'";

    if ($conn->query($sql) === TRUE) {
        // Deletion successful
        header("Location: campaign.php");
        exit();
    } else {
        // Error in deletion
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>