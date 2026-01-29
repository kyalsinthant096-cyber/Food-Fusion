<?php
include("DatabaseConnection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM feedback WHERE id = $id";

    if (mysqli_query($connection, $sql)) {
        echo "<script>alert('Message deleted successfully'); window.location.href='feedback.php';</script>";
    } else {
        echo "Error deleting message: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}
?>
