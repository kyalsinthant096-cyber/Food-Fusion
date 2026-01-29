<?php
include("DatabaseConnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($connection, $sql)) {
        echo "<script>alert('Thank you for your message!'); window.location.href='contact.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
