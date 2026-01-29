<?php include("DatabaseConnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Recipe Collection - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* [Same CSS as yours, unchanged] */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fffaf0;
            padding: 30px;
        }

        h1 {
            color: #d35400;
            margin-bottom: 20px;
            text-align: center;
        }

        .add-form {
            margin-bottom: 40px;
            background-color: #fff9c4;
            padding: 20px;
            border-radius: 10px;
        }

        .add-form input,
        .add-form textarea,
        .add-form select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #fdd835;
            border-radius: 5px;
        }

        .add-form button {
            margin-top: 10px;
            background-color: #fbc02d;
            color: #333;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1100px;
            border-collapse: collapse;
            background-color: #fffce8;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ffeaa7;
        }

        th {
            background-color: #f6d365;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #fffde7;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
            margin: 2px 0;
        }

        .edit-btn {
            background-color: #f1c40f;
            color: #333;
        }

        .delete-btn {
            background-color: #e74c3c;
            color: white;
        }

        .edit-btn:hover {
            background-color: #f39c12;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        .see-more {
            color: #2980b9;
            cursor: pointer;
            font-size: 13px;
            display: block;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            .btn {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Admin Navigation -->
      <?php include 'admin_panel.php' ?>

    <h1>Recipe Collection</h1>

    <!-- Recipe Form -->
    <div class="add-form">
        <form action="save_recipe.php" method="post" enctype="multipart/form-data">
            <h2>Add New Recipe</h2>
            <input type="text" name="title" placeholder="Recipe Title" required>
            <input type="text" name="cuisine" placeholder="Cuisine (e.g., Japanese, Indian)" required>
            <select name="difficulty" required>
                <option value="">Select Difficulty</option>
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
            <textarea name="ingredients" rows="4" placeholder="Ingredients" required></textarea>
            <textarea name="instructions" rows="4" placeholder="Instructions" required></textarea>
            <input type="file" name="image" accept="image/*">
            <button type="submit" class="btn">Add Recipe</button>
        </form>
    </div>

    <!-- Recipe Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Cuisine</th>
                    <th>Difficulty</th>
                    <th>Ingredients</th>
                    <th>Instructions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM recipecollection ORDER BY id DESC";
                $result = mysqli_query($connection, $sql);
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $count++ . "</td>";
                    echo "<td><img src='" . $row['image'] . "' width='60px' height='60px' style='border-radius:8px;'></td>";
                    echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cuisine']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['difficulty']) . "</td>";

                    // Ingredients
                    $ingredients = nl2br(htmlspecialchars($row['ingredients']));
                    echo "<td><div class='text-block'>
                            <div class='short-text'>" . substr($ingredients, 0, 100) . "...</div>
                            <div class='full-text' style='display:none;'>" . $ingredients . "</div>
                            <span class='see-more' onclick='toggleText(this)'>See more...</span>
                          </div></td>";

                    // Instructions
                    $instructions = nl2br(htmlspecialchars($row['instructions']));
                    echo "<td><div class='text-block'>
                            <div class='short-text'>" . substr($instructions, 0, 100) . "...</div>
                            <div class='full-text' style='display:none;'>" . $instructions . "</div>
                            <span class='see-more' onclick='toggleText(this)'>See more...</span>
                          </div></td>";

                    echo "<td>
                            <a href='edit_recipe.php?id=" . $row['id'] . "' class='btn edit-btn'>Edit</a>
                            <a href='delete_recipe.php?id=" . $row['id'] . "' onclick=\"return confirm('Delete this recipe?');\" class='btn delete-btn'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Toggle Text Script -->
    <script>
        function toggleText(elem) {
            const block = elem.closest('.text-block');
            const shortText = block.querySelector('.short-text');
            const fullText = block.querySelector('.full-text');

            if (fullText.style.display === "none") {
                fullText.style.display = "block";
                shortText.style.display = "none";
                elem.textContent = "See less...";
            } else {
                fullText.style.display = "none";
                shortText.style.display = "block";
                elem.textContent = "See more...";
            }
        }
    </script>
    <br>
   
</body>
</html>
