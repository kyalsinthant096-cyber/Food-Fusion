<?php include("DatabaseConnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Food Fusion Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #fffef2;
    padding: 30px;
    margin: 0;
}

h1 {
    text-align: center;
    color: #e67e22;
    margin-bottom: 40px;
}

.search-filter-bar {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
    gap: 10px;
}

.search-box {
    position: relative;
    width: 240px;
}

.search-box input {
    width: 100%;
    padding: 10px 35px 10px 15px;
    border: 1px solid #facc15;
    border-radius: 25px;
    font-size: 0.9rem;
}

.search-box i {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
}

.category-btn {
    background: #fcd34d;
    border: none;
    border-radius: 25px;
    padding: 8px 16px;
    font-size: 0.9rem;
    cursor: pointer;
    color: #333;
    font-weight: bold;
    transition: 0.3s;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.category-btn:hover {
    background: #fbbf24;
}

.grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.recipe {
    background-color: #fffde7;
    border: 1px solid #fdd835;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    transition: transform 0.2s ease;
}

.recipe:hover {
    transform: translateY(-4px);
}

.recipe img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}

.recipe h2 {
    margin: 0 0 10px;
    color: #f39c12;
    font-size: 1.1rem;
    height: 48px;
    overflow: hidden;
}

.section-title {
    color: #888;
    margin-top: 8px;
    font-size: 0.85rem;
    font-weight: 600;
}

.text-block {
    font-size: 0.9rem;
    color: #444;
    white-space: pre-line;
    margin-bottom: 5px;
    height: 40px;
    overflow: hidden;
}

.button-wrapper {
    text-align: right;
    margin-top: auto;
}

.view-btn {
    padding: 8px 16px;
    background: linear-gradient(to right, #fcd34d, #fbbf24);
    color: #333;
    font-weight: bold;
    text-decoration: none;
    border-radius: 25px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.view-btn:hover {
    background: linear-gradient(to right, #fbbf24, #fcd34d);
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

@media (max-width: 992px) {
    .grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .grid {
        grid-template-columns: 1fr;
    }
    .search-filter-bar {
        flex-direction: column;
    }
}
</style>

<!-- Font Awesome for search icon -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>

<!-- Navigation -->
<?php include 'Navigation.php' ?>
<br>

<h1>Our Recipe Collection</h1>

<!-- ✅ Search + Category Filter Bar -->
<div class="search-filter-bar">
    <form method="GET" class="search-box">
        <input type="text" name="search" placeholder="Search by cuisine..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        <i class="fa-solid fa-magnifying-glass"></i>
    </form>
    <button class="category-btn">Chinese Food</button>
    <button class="category-btn">Myanmar Food</button>
    <button class="category-btn">Japan Food</button>
    <button class="category-btn">Thailand Food</button>
</div>

<!-- ✅ Recipe Grid -->
<div class="grid">
<?php
    $search = isset($_GET['search']) ? mysqli_real_escape_string($connection, $_GET['search']) : '';
    if (!empty($search)) {
        $sql = "SELECT * FROM recipecollection WHERE cuisine LIKE '%$search%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM recipecollection ORDER BY id DESC";
    }

    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='recipe'>";
            if (!empty($row['image'])) {
                echo "<img src='" . $row['image'] . "' alt='Recipe Image'>";
            }
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";

            echo "<div class='section-title'>Cuisine: <span style='color:#333'>" . htmlspecialchars($row['cuisine']) . "</span></div>";
            echo "<div class='section-title'>Difficulty: <span style='color:#333'>" . htmlspecialchars($row['difficulty']) . "</span></div>";

            echo "<div class='section-title'>Ingredients:</div>";
            echo "<div class='text-block'>" . substr(htmlspecialchars($row['ingredients']), 0, 50) . "...</div>";

            echo "<div class='section-title'>Instructions:</div>";
            echo "<div class='text-block'>" . substr(htmlspecialchars($row['instructions']), 0, 50) . "...</div>";

            echo "<div class='button-wrapper'>";
                echo "<a class='view-btn' href='recipe_view.php?id=" . $row['id'] . "'>👀 View Details</a>";
            echo "</div>";
        echo "</div>";
    }
?>
</div>

<br>
<?php include 'footer.php' ?>

</body>
</html>
