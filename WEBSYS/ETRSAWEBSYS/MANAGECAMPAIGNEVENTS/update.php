<?php
include 'conn.php';

if(isset($_POST['approved'])){
    // Get the ID of the thumbnail from the form submission
    $id = $_POST['id'];

    // Update the 'status' column to 'Approved' for the provided ID
    $sql = "UPDATE `thumbnails` SET `status` = 'Approved' WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id); // 'i' indicates the parameter is an integer
    
    if ($stmt->execute()) {
        // If the query executes successfully, redirect to the page where thumbnail details are displayed
        header('Location: campaign.php?id=' . $id);
    } else {
        // If there's an error in the query execution, handle it accordingly
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
