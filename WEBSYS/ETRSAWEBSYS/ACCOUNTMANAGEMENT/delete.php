<?php
require "conn.php";

$id = isset($_GET['userID']) ? $_GET['userID'] : null;

if ($id !== null) {
    $sql = "DELETE FROM useracct WHERE userID = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Record deleted successfully!'); window.location.href = '/WEBSYS-LAST-REVISE/WEBSYS/ETRSAWEBSYS/ACCOUNTMANAGEMENT/account.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "UID not provided.";
}
?>
