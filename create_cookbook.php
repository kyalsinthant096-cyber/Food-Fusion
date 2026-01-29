<?php
include("DatabaseConnection.php");

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $photoName = null;

    if ($title && $description) {
        // Handle file upload
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
            $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            $photoName = uniqid('cookbook_') . '.' . $ext;
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $uploadPath = $uploadDir . $photoName;
            move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath);
        }

        // Insert into DB
        $stmt = $connection->prepare("INSERT INTO community_cookbook (title, description, photo) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $description, $photoName);
        $stmt->execute();
        $stmt->close();

        // Redirect to community_cookbook.php
        header("Location: community_cookbook.php");
        exit;
    } else {
        $error = "Title and description are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Cookbook Card</title>
<style>
  body {
    background: linear-gradient(to right, #fcd34d, #fff);
    font-family: Arial;
    padding: 20px;
  }
  form {
    max-width: 500px;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px #ccc;
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  label {
    margin-top: 10px;
    display: block;
    font-weight: bold;
  }
  input[type="text"], textarea, input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
  }
  textarea {
    resize: vertical;
    min-height: 100px;
  }
  button {
    margin-top: 20px;
    padding: 12px;
    width: 100%;
    background: #f59e0b;
    color: white;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
  }
  .error {
    color: red;
    text-align: center;
    margin-top: 15px;
  }
  .back-link {
    display: block;
    text-align: center;
    margin-top: 20px;
    text-decoration: none;
    color: #333;
  }
</style>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
  <h2>Create Cookbook Card</h2>

  <?php if ($error): ?>
    <div class="error"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>

  <label for="title">Title</label>
  <input type="text" name="title" id="title" required>

  <label for="description">Description</label>
  <textarea name="description" id="description" required></textarea>

  <label for="photo">Photo (optional)</label>
  <input type="file" name="photo" id="photo" accept="image/*">

  <button type="submit">Submit</button>

  <a href="community_cookbook.php" class="back-link">← Back to Cookbook</a>
</form>

</body>
</html>
