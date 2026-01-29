<?php
include("DatabaseConnection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get image path before deleting
    $result = mysqli_query($connection, "SELECT image FROM recipecollection WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    $imagePath = $row['image'];

    // Delete from database
    $deleteSql = "DELETE FROM recipecollection WHERE id = $id";
    if (mysqli_query($connection, $deleteSql)) {
        // Delete image file from server
        if (!empty($imagePath) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        echo "<script>alert('Recipe deleted successfully'); window.location.href='recipecollection.php';</script>";
    } else {
        echo "Error deleting recipe: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}
?>
