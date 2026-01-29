<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Food Fusion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Poppins', sans-serif;
  }

  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(to right, #fcd34d, #fff);
    padding: 10px 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .logo {
    font-size: 20px;
    font-weight: 600;
    color: #333;
  }

  .menu-icon {
    display: none;
    font-size: 24px;
    cursor: pointer;
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
    align-items: center;
  }

  .nav-links li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .nav-links li a:hover {
    color: #eab308;
  }

  .register-btn {
    background: #facc15;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 500;
    transition: background 0.3s ease;
  }

  .register-btn a {
    color: #333;
    text-decoration: none;
  }

  .register-btn:hover {
    background: #fbbf24;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .menu-icon {
      display: block;
    }

    .nav-links {
      position: absolute;
      top: 60px;
      left: 0;
      right: 0;
      background: #fffde7;
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
      padding: 15px 20px;
      display: none;
    }

    .nav-links.active {
      display: flex;
    }

    .register-btn {
      width: 100%;
    }
  }
</style>

<script>
  function toggleMenu() {
    const nav = document.getElementById("navLinks");
    nav.classList.toggle("active");
  }
</script>
  
</head>
<body>

<nav>
  <div class="logo">Welcome 🍳 Admin</div>
  <div class="menu-icon" onclick="toggleMenu()">
    <i class="fas fa-bars"></i>
  </div>
  <ul class="nav-links" id="navLinks">
   
    <li><a href="cookbook_list.php">Cook Book List</a></li>
    <li><a href="recipecollection.php">Recipe List</a></li>
    <li><a href="user_list.php">User List</a></li>
    <li><a href="feedback.php">Feed Back</a></li>
   
    <li><button class="register-btn"><a href="login_form.php">log Out</a></button></li>
  </ul>
</nav>



 
 
</body>
</html>
