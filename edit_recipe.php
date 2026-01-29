<?php
include("DatabaseConnection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM recipecollection WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    $recipe = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Recipe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8e1;
            padding: 30px;
        }
        form {
            max-width: 600px;
            background-color: #fffde7;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #fdd835;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #fbc02d;
            border-radius: 5px;
        }
        button {
            background-color: #f1c40f;
            border: none;
            padding: 10px 15px;
            color: #333;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #f39c12;
        }
    </style>
</head>
<body>
    <h2>Edit Recipe</h2>
    <form action="update_recipe.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $recipe['id']; ?>">

        <label>Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($recipe['title']); ?>" required>

        <label>Cuisine:</label>
        <input type="text" name="cuisine" value="<?php echo htmlspecialchars($recipe['cuisine']); ?>" required>

        <label>Difficulty:</label>
        <select name="difficulty" required>
            <option value="Easy" <?php if ($recipe['difficulty'] == 'Easy') echo 'selected'; ?>>Easy</option>
            <option value="Medium" <?php if ($recipe['difficulty'] == 'Medium') echo 'selected'; ?>>Medium</option>
            <option value="Hard" <?php if ($recipe['difficulty'] == 'Hard') echo 'selected'; ?>>Hard</option>
        </select>

        <label>Ingredients:</label>
        <textarea name="ingredients" rows="4" required><?php echo htmlspecialchars($recipe['ingredients']); ?></textarea>

        <label>Instructions:</label>
        <textarea name="instructions" rows="4" required><?php echo htmlspecialchars($recipe['instructions']); ?></textarea>

        <label>Current Image:</label><br>
        <img src="<?php echo $recipe['image']; ?>" width="100px"><br><br>

        <label>Change Image:</label>
        <input type="file" name="image">

        <button type="submit">Update Recipe</button>
    </form>
</body>
</html>
