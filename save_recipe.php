<?php
include("DatabaseConnection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $ingredients = mysqli_real_escape_string($connection, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($connection, $_POST['instructions']);

    // Handle image upload
    $imagePath = '';
    if ($_FILES['image']['name']) {
        $imageName = time() . '_' . basename($_FILES["image"]["name"]);
        $targetPath = "uploads/" . $imageName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath);
        $imagePath = $targetPath;
    }

    $sql = "INSERT INTO recipecollection (title, ingredients, instructions, image) 
            VALUES ('$title', '$ingredients', '$instructions', '$imagePath')";
    mysqli_query($connection, $sql);

    header("Location: recipecollection.php");
    exit;
}
?>
