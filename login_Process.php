<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Process</title>
</head>
<body>
	
<?php
include('DatabaseConnection.php');

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_SESSION['login_counter'])) {
    $counter = $_SESSION['login_counter'];
} else {
    $counter = 0;
}

$sql_search = "SELECT * FROM registertable WHERE username = '$username'";
$result = mysqli_query($connection, $sql_search);

if (mysqli_num_rows($result) == 1) {
    $record = mysqli_fetch_assoc($result);
    $hashed_pw = $record['password'];

    if (password_verify($password, $hashed_pw)) {
        $_SESSION['username'] = $username;
        $_SESSION['login_counter'] = 0; // reset login attempt

        if ($record['role'] == "admin") {
            echo "<script>
                    alert('Login Success');
                    window.location.href = 'admin_panel.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Login Successful! Welcome!');
                    window.location.href = 'foodfusionhome.php';
                  </script>";
        }
        exit();
    } else {
        $counter++;
        $_SESSION['login_counter'] = $counter;

        if ($counter >= 3) {
            setcookie("login_counter", "locked", time() + 60); // lock for 1 minute
            echo "<script>
                    alert('Too many failed attempts! Please wait a minute.');
                    window.location.href = 'loginTimer.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Wrong password! Please try again.');
                    window.location.href = 'login_form.php';
                  </script>";
        }
    }
} else {
    echo "<script>
            alert('Username not found!');
            window.location.href = 'login_form.php';
          </script>";
}
?>
</body>
</html>
