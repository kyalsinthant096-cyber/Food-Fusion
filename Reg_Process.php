<?php
include("DatabaseConnection.php");

$fname = mysqli_real_escape_string($connection, $_POST['fname']);
$lname = mysqli_real_escape_string($connection, $_POST['lname']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$country = $_POST['country'];

$profile = $_FILES['profile']['name'];
$temp = $_FILES['profile']['tmp_name'];
$path = "image/" . $profile;
copy($temp, $path);

$username = $_POST['username'];
$pw = $_POST['pw'];
$hashedPW = password_hash($pw, PASSWORD_DEFAULT);

// Check if username already exists
$sqlSearch = "SELECT * FROM registertable WHERE username = '$username'";
$result = mysqli_query($connection, $sqlSearch);
$numrows = mysqli_num_rows($result);

if ($numrows == 0) {
    // Username is unique, proceed to insert
    $sql = "INSERT INTO registertable (fname, lname, email, country, profile, username, password, role) 
            VALUES ('$fname', '$lname', '$email', '$country', '$profile', '$username', '$hashedPW', 'user')";

    if (mysqli_query($connection, $sql)) {
        echo "<script>
                alert('Registration Completed!');
                window.location.href='foodfusionhome.php';
              </script>";
    } else {
        echo "<script>
                alert('Registration Failed');
                window.location.href='RegisterForm.php';
              </script>";
    }
} else {
    // Username already exists
    echo "<script>
            alert('Please change the username');
            window.location.href='register.php';
          </script>";
}
?>
