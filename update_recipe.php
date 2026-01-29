<?php
include("DatabaseConnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $ingredients = mysqli_real_escape_string($connection, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($connection, $_POST['instructions']);
    $cuisine = mysqli_real_escape_string($connection, $_POST['cuisine']);
    $difficulty = mysqli_real_escape_string($connection, $_POST['difficulty']);

    $imageUpdate = "";
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . '_' . basename($_FILES["image"]["name"]);
        $targetPath = "uploads/" . $imageName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath);
        $imageUpdate = ", image='$targetPath'";
    }

    $sql = "UPDATE recipecollection 
            SET 
                title='$title', 
                ingredients='$ingredients', 
                instructions='$instructions',
                cuisine='$cuisine',
                difficulty='$difficulty'
                $imageUpdate 
            WHERE id=$id";

    mysqli_query($connection, $sql);

    header("Location: recipecollection.php");
    exit;
}
?>
