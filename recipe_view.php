<?php
include("DatabaseConnection.php");

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM recipecollection WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    $recipe = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Recipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fffef2;
            padding: 30px;
            margin: 0;
        }

        .recipe {
            max-width: 500px;
            margin: auto;
            background-color: #fffde7;
            border: 1px solid #fdd835;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .recipe img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h1 {
            color: #f39c12;
            margin-bottom: 15px;
            font-size: 1.4rem;
            text-align: center;
        }

        .section-title {
            color: #888;
            margin-top: 15px;
            font-weight: bold;
            font-size: 0.95rem;
        }

        .text-block {
            white-space: pre-line;
            margin-top: 5px;
            font-size: 0.95rem;
            color: #444;
        }

        a.back {
            display: inline-block;
            margin-top: 25px;
            padding: 8px 15px;
            background-color: #f39c12;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.2s;
        }

        a.back:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>

<?php if ($recipe): ?>
    <div class="recipe">
        <?php if (!empty($recipe['image'])): ?>
            <img src="<?php echo $recipe['image']; ?>" alt="Recipe Image">
        <?php endif; ?>
        <h1><?php echo htmlspecialchars($recipe['title']); ?></h1>

        <div class="section-title">Cuisine:</div>
        <div class="text-block"><?php echo htmlspecialchars($recipe['cuisine']); ?></div>

        <div class="section-title">Difficulty:</div>
        <div class="text-block"><?php echo htmlspecialchars($recipe['difficulty']); ?></div>

        <div class="section-title">Ingredients:</div>
        <div class="text-block"><?php echo htmlspecialchars($recipe['ingredients']); ?></div>

        <div class="section-title">Instructions:</div>
        <div class="text-block"><?php echo htmlspecialchars($recipe['instructions']); ?></div>

        <a class="back" href="recipeform.php">← Back to Recipes</a>
    </div>
<?php else: ?>
    <p>Recipe not found.</p>
<?php endif; ?>

</body>
</html>
