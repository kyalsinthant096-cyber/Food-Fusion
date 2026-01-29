<?php
include("DatabaseConnection.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = intval($_GET['id']);

    // Prepare delete query
    $sql = "DELETE FROM registertable WHERE id = $userId";

    if (mysqli_query($connection, $sql)) {
        // Success - redirect back to user list
        header("Location: user_list.php"); // Replace with your user list page filename
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "Invalid user ID.";
}
?>
