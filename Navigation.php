<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Food Fusion Home</title>
  <link rel="stylesheet" href="Navigation_style.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
  <nav>
    <div class="logo">EcoLive🌿</div>

    <div class="menu-icon" onclick="toggleMenu()">
      <i class="fas fa-bars"></i>
    </div>

    <ul class="nav-links" id="navLinks">
      <li><a href="foodfusionhome.php">Home</a></li>
      <li><a href="about_us.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="recipeform.php">Recipe Collection</a></li>
      <li><a href="community_cookbook.php">Community Cook Book</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" onclick="toggleDropdown()">Resources <i class="fa-solid fa-caret-down"></i></a>
        <div class="dropdown-content" id="dropdownContent">
          <a href="culinary_resources.php">Culinary Resources</a>
          <a href="educational_resources.php">Educational Resources</a>
        </div>
      </li>
    </ul>
    <a class="login_btn" href="login_form.php">Login</a>
  </nav>

  <script>
    function toggleMenu() {
      document.getElementById("navLinks").classList.toggle("active");
    }

    function toggleDropdown() {
      const dropdown = document.getElementById("dropdownContent");
      dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }
  </script>
</body>
</html>
