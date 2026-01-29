<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EcoLive🌿Food Fusion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="style2.css">
  
  <style>
    /* event slider */

    h2.title {
      text-align: center;
      margin-top: 40px;
      font-size: 36px;
      color: #b45309;
    }

    .slider-container {
      position: relative;
      width: 90%;
      max-width: 900px;
      height: 400px;
      margin: 40px auto 20px;
      perspective: 1200px;
    }

    .slider-wrapper {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .card {
      width: 300px;
      height: 100%;
      position: absolute;
      transition: transform 0.7s ease-in-out, opacity 0.5s;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .card.hidden {
      opacity: 0;
      pointer-events: none;
    }

    .card.left {
      transform: translateX(-350px) scale(0.8) rotateY(30deg);
      z-index: 1;
    }

    .card.center {
      transform: translateX(0) scale(1) rotateY(0);
      z-index: 2;
    }

    .card.right {
      transform: translateX(350px) scale(0.8) rotateY(-30deg);
      z-index: 1;
    }

    .btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: #fcd34d;
      color: #333;
      font-weight: bold;
      border: none;
      padding: 12px 18px;
      cursor: pointer;
      z-index: 3;
      border-radius: 50%;
      font-size: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .btn.left { left: -50px; }
    .btn.right { right: -50px; }

    .event-description {
      max-width: 900px;
      margin: 0 auto 60px;
      padding: 20px;
      text-align: center;
      background: #fff3b0;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .card.left,
      .card.right {
        display: none;
      }

      .btn.left { left: 10px; }
      .btn.right { right: 10px; }

      .slider-container {
        height: 320px;
      }
    }

    /* Feature recipesa and Culinary trend */
    .feature-section {
      background: #fffbe6;
      padding: 50px 20px;
      text-align: center;
    }
    .feature-section h2 {
      font-size: 2rem;
      margin-bottom: 30px;
      color: #b45309;
    }
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: auto;
    }
    .feature-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .feature-card:hover {
      transform: translateY(-5px);
    }
    .feature-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .feature-content {
      padding: 15px;
    }
    .feature-content h3 {
      margin: 10px 0;
      font-size: 1.2rem;
      color: #92400e;
    }
    .feature-content p {
      font-size: 0.95rem;
      color: #4b5563;
    }
    .recipe-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 16px;
      background: #facc15;
      color: #000;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }
    .recipe-btn:hover {
      background: #eab308;
    }

    /* Popup Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
      overflow-y: auto;
      padding: 15px;
      box-sizing: border-box;
    }

    .modal-content {
      background: #fff;
      border-radius: 10px;
      width: 100%;
      max-width: 380px;
      padding: 20px 25px;
      position: relative;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      font-family: 'Poppins', sans-serif;
    }

    .close-btn {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      cursor: pointer;
      user-select: none;
    }

    /* Form */
    .registration-form h2 {
      margin-bottom: 15px;
      color: #b45309;
      font-weight: 600;
      text-align: center;
    }

    .row {
      display: flex;
      gap: 10px;
    }

    .row > div {
      flex: 1;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select,
    input[type="file"] {
      width: 100%;
      padding: 8px 10px;
      margin-bottom: 12px;
      border: 1.8px solid #ccc;
      border-radius: 6px;
      font-size: 0.95rem;
      transition: border-color 0.3s;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    select:focus,
    input[type="file"]:focus {
      border-color: #fcd34d;
      outline: none;
    }

    .submit-btn {
      width: 100%;
      background-color: #fcd34d;
      border: none;
      padding: 10px 0;
      font-weight: 700;
      font-size: 1rem;
      border-radius: 30px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #eab308;
    }

    @media (max-width: 480px) {
      .row {
        flex-direction: column;
      }
    }

    /* cookie accept */
    .cookie-banner {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #fff8dc;
  padding: 15px 20px;
  box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  z-index: 9999;
  font-family: 'Poppins', sans-serif;
}

.cookie-banner p {
  margin: 0;
  font-size: 14px;
  color: #333;
  flex: 1 1 60%;
}

.cookie-banner a {
  color: #1d4ed8;
  text-decoration: underline;
}

.cookie-banner .cookie-buttons {
  display: flex;
  gap: 10px;
  margin-top: 10px;
  flex: 1 1 35%;
  justify-content: flex-end;
}

.cookie-banner button {
  background-color: #facc15;
  border: none;
  padding: 8px 14px;
  border-radius: 5px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s;
}

.cookie-banner button:hover {
  background-color: #eab308;
}

@media (max-width: 600px) {
  .cookie-banner {
    flex-direction: column;
    align-items: flex-start;
  }

  .cookie-banner .cookie-buttons {
    width: 100%;
    justify-content: flex-start;
  }
}


  </style>
</head>
<body>

  <!-- Navigation -->
  <?php include 'Navigation.php' ?>


  <!-- foodfusion mission -->
  <section class="mission-section">
    <div class="mission-text">
      <h2>Explore the Art of <span>EcoLive🌿 Foodfusion</span></h2>
      <p>
        At Food Fusion, our mission is simple yet powerful — to bring people together through the joy of cooking and the love of food. 
        We believe that food is more than just sustenance; it is a fusion of culture, creativity, and community.
      </p>
      <p>
        Our goal is to inspire every home cook, from beginners to culinary enthusiasts, by offering accessible recipes, 
        educational resources, and a vibrant platform where food lovers can connect and share. 
        We are committed to promoting a fusion of traditional flavors and modern techniques to create dishes that are both meaningful and innovative.
      </p>
      <p>
        With every recipe we share and every story we tell, we aim to spark creativity in kitchens around the world. 
        We stand by our values of quality, inclusivity, and continuous learning.
      </p>
      <p>
        Thank you for being a part of our growing community. Together, we can make cooking a shared experience of love, 
        learning, and inspiration.
      </p>
      <!-- Changed Join Us button to open popup -->
      <a href="#" id="openPopupBtn" class="mission-btn">Join Us</a>
    </div>

    <div class="mission-img">
      <img src="image/photo_2025-06-23_22-26-17.jpg" alt="Fusion Dish">
    </div>
  </section>


  <!-- feature recipes and culinary trend -->
  <section class="feature-section">
    <h2>🍽 Featured Recipes</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <img src="image/Spicy Chicken with Chilies.webp" alt="Spicy Ramen Bowl">
        <div class="feature-content">
          <h3>🔥Spicy Chicken with Chilies</h3>
          <p>Spicy Chicken with Chilies is a bold Sichuan dish made with crispy chicken, dried chilies, and peppercorns, offering a fiery, numbing flavor that excites spicy food lovers.</p>
          <a href="recipeform.php" class="recipe-btn">Get Recipe</a>
        </div>
      </div>

      <div class="feature-card">
        <img src="image/Yum Neua (Thai Beef Salad).jpg" alt="Thai Beef Salad">
        <div class="feature-content">
          <h3>Yum Neua (Thai Beef Salad)</h3>
          <p>Yum Neua is a zesty Thai beef salad made with grilled beef slices, fresh herbs, lime juice, fish sauce, and chilies—bursting with bold, spicy, sour, and savory flavors.</p>
          <a href="recipeform.php" class="recipe-btn">Get Recipe</a>
        </div>
      </div>

      <div class="feature-card">
        <img src="image/Steamed Whole Fish with Soy & Ginger.jpg" alt="Steamed Whole Fish with Soy & Ginger">
        <div class="feature-content">
          <h3>Steamed Whole Fish with Soy</h3>
          <p>Steamed Whole Fish with Soy & Ginger is a delicate Chinese dish featuring tender fish infused with aromatic ginger, scallions, and light soy sauce—healthy, flavorful, and beautifully presented for special meals.</p>
          <a href="recipeform.php" class="recipe-btn">Get Recipe</a>
        </div>
      </div>
    </div>
  </section>

  <section class="feature-section">
    <h2>🌟 Culinary Trends 2025</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <img src="image/Pork Curry (Wet Tha Hnut).jpg" alt="Pork Curry ">
        <div class="feature-content">
          <h3>Pork Curry</h3>
          <p>Pork Curry is a rich, savory dish featuring tender pork simmered in a blend of spices, onions, garlic, and tomatoes, creating a flavorful gravy perfect with steamed rice or flatbread..</p>
          <a href="recipeform.php" class="recipe-btn">Explore</a>
        </div>
      </div>

      <div class="feature-card">
        <img src="image/Oden (Winter Hot Pot Curry Style).webp" alt="Hot Pot Curry">
        <div class="feature-content">
          <h3>Oden (Winter Hot Pot Curry Style)</h3>
          <p>Oden (Winter Hot Pot Curry Style) blends traditional Japanese ingredients like daikon, tofu, and fish cakes in a warm, flavorful curry broth—comforting, hearty, and perfect for cold-weather meals.</p>
          <a href="recipeform.php" class="recipe-btn">Explore</a>
        </div>
      </div>

      <div class="feature-card">
        <img src="image/Nigiri Sushi (Hand-Pressed Sushi).jpg" alt="Nigiri Sushi">
        <div class="feature-content">
          <h3>Nigiri Sushi (Hand-Pressed Sushi)</h3>
          <p>Nigiri Sushi features hand-pressed vinegared rice topped with fresh fish or seafood. It's simple yet elegant, highlighting pure flavors and textures—an essential and iconic part of Japanese cuisine.</p>
          <a href="recipeform.php" class="recipe-btn">Explore</a>
        </div>
      </div>
    </div>
  </section>


  <!-- event slider -->

  <h2 class="title">Upcoming Events</h2>

  <div class="slider-container">
    <button class="btn left">&#10094;</button>
    <div class="slider-wrapper">
      <div class="card center"><img src="image/event2.jpg" alt="Wedding Event"></div>
      <div class="card right"><img src="image/event1.jpg" alt="Birthday Event"></div>
      <div class="card left"><img src="image/event3.jpg" alt="Office Event"></div>
    </div>
    <button class="btn right">&#10095;</button>
  </div>

  <div class="event-description" id="event-desc">
    <h3>Wedding Event</h3>
    <p>Celebrate your love story with elegance and taste. Our Food Fusion wedding services bring a culinary experience tailored to your special day.</p>
  </div>

  <script>
    const cards = document.querySelectorAll('.card');
    const desc = document.getElementById('event-desc');
    const btnLeft = document.querySelector('.btn.left');
    const btnRight = document.querySelector('.btn.right');

    let current = 0;
    const events = [
      {
        title: "Wedding Event",
        text: "Celebrate your love story with elegance and taste. Our Food Fusion wedding services bring a culinary experience tailored to your special day."
      },
      {
        title: "Birthday Event",
        text: "Make birthdays unforgettable with themed menus, sweet treats, and vibrant decorations. Food Fusion crafts fun-filled food moments."
      },
      {
        title: "Office Event",
        text: "Host your corporate events with professionalism and flavor. We deliver creative catering that energizes teams and impresses clients."
      }
    ];

    function updateSlider() {
      cards.forEach(card => card.className = 'card hidden');
      cards[(current + 2) % 3].classList.replace('hidden', 'left');
      cards[current].classList.replace('hidden', 'center');
      cards[(current + 1) % 3].classList.replace('hidden', 'right');

      // Update text
      desc.innerHTML = `
        <h3>${events[current].title}</h3>
        <p>${events[current].text}</p>
      `;
    }

    btnRight.onclick = () => {
      current = (current + 1) % 3;
      updateSlider();
    };

    btnLeft.onclick = () => {
      current = (current + 2) % 3; // simulate -1 mod 3
      updateSlider();
    };

    // Auto slide every 5 seconds
    setInterval(() => {
      current = (current + 1) % 3;
      updateSlider();
    }, 5000);

    updateSlider();
  </script>


 <!-- Popup Modal -->
<div id="popupModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" id="closePopupBtn">&times;</span>

    <form action="Reg_Process.php" method="post" enctype="multipart/form-data" class="registration-form">
      <h2>Register for Food Fusion</h2>

      <div class="row">
        <div>
          <label for="firstname">First Name:</label>
          <input type="text" id="firstname" name="fname" required>
        </div>
        <div>
          <label for="lastname">Last Name:</label>
          <input type="text" id="lastname" name="lname" required>
        </div>
      </div>

      <label for="country">Country:</label>
      <select id="country" name="country" required>
        <option value="" disabled selected>Select your country</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Thailand">Thailand</option>
        <option value="Japan">Japan</option>
        <option value="India">India</option>
        <option value="China">China</option>
        <option value="Other">Other</option>
      </select>

      <label for="profile_image">Profile Image:</label>
      <input type="file" id="profile_image" name="profile" accept="image/*">

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="pw" required>

      <button type="submit" class="submit-btn">Register</button>
    </form>
  </div>
</div>


  <script>
    // Get popup elements
    const openBtn = document.getElementById('openPopupBtn');
    const modal = document.getElementById('popupModal');
    const closeBtn = document.getElementById('closePopupBtn');

    // Open popup
    openBtn.addEventListener('click', function(e) {
      e.preventDefault();
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // prevent background scroll
    });

    // Close popup on X click
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    });

    // Close popup on outside click
    window.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    });
  </script>
  <!-- cookie accept code -->
  <div class="cookie-banner" id="cookieBanner">
  <p>
    This website uses cookies to ensure you get the best experience.
    <a href="privacy_policy.php">Learn more</a>.
  </p>
  <div class="cookie-buttons">
    <button onclick="acceptCookies()">Accept</button>
    <button onclick="declineCookies()">Decline</button>
  </div>
</div>

<script>
  function acceptCookies() {
    document.getElementById("cookieBanner").style.display = "none";
    localStorage.setItem("cookieConsent", "accepted");
  }

  function declineCookies() {
    document.getElementById("cookieBanner").style.display = "none";
    localStorage.setItem("cookieConsent", "declined");
  }

  // Show banner only if not previously accepted/declined
  window.onload = function() {
    const consent = localStorage.getItem("cookieConsent");
    if (consent === "accepted" || consent === "declined") {
      document.getElementById("cookieBanner").style.display = "none";
    }
  };
</script>




  <!-- footer -->
  <?php include 'footer.php' ?>

</body>
</html>
