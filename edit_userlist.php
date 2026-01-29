<?php
include("DatabaseConnection.php");

if (!isset($_GET['id'])) {
    echo "Invalid request.";
    exit;
}

$id = $_GET['id'];

// Fetch existing user data
$sql = "SELECT * FROM registertable WHERE id = $id";
$result = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "User not found.";
    exit;
}

// Update on form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $country = mysqli_real_escape_string($connection, $_POST['country']);

    $imageUpdate = "";
    if (!empty($_FILES["profile"]["name"])) {
        $imageName = time() . '_' . basename($_FILES["profile"]["name"]);
        $targetPath = "image/" . $imageName;
        move_uploaded_file($_FILES["profile"]["tmp_name"], $targetPath);

        // Optional: delete old image file
        if (!empty($user['profile']) && file_exists("image/" . $user['profile'])) {
            unlink("image/" . $user['profile']);
        }

        $imageUpdate = ", profile='$imageName'";
    }

    $updateSql = "UPDATE registertable 
                  SET fname='$fname', lname='$lname', email='$email', username='$username', country='$country' $imageUpdate
                  WHERE id=$id";

    if (mysqli_query($connection, $updateSql)) {
        echo "<script>alert('User updated successfully.'); window.location.href='user_list.php';</script>";
        exit;
    } else {
        echo "Error updating user: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f8f8;
            padding: 30px;
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"], input[type="email"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #fcd34d;
            color: #000;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        button:hover {
            background-color: #fbbf24;
        }

        img {
            display: block;
            margin: 10px auto;
            width: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit User</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>First Name:</label>
        <input type="text" name="fname" value="<?php echo htmlspecialchars($user['fname']); ?>" required>

        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo htmlspecialchars($user['lname']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

        <label>Username:</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

        <label>Country:</label>
        <input type="text" name="country" value="<?php echo htmlspecialchars($user['country']); ?>" required>

        <label>Profile Image:</label>
        <?php if (!empty($user['profile'])): ?>
            <img src="image/<?php echo $user['profile']; ?>" alt="Current Image">
        <?php endif; ?>
        <input type="file" name="profile">

        <button type="submit">Update User</button>
    </form>
</div>

</body>
</html>
