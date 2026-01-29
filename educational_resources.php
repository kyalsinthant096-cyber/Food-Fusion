<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Educational Resources - Food Fusion</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #fffef5;
      color: #333;
      line-height: 1.6;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }

    h2, h3 {
      color: #333;
    }

    h2 {
      text-align: center;
      font-size: 2.4em;
      margin-bottom: 30px;
    }

    /* --- Infographics Section --- */
    .edu-section {
      display: flex;
      flex-direction: column;
      gap: 50px;
    }

    .edu-box {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: start;
    }

    .edu-text h3 {
      font-size: 1.8em;
      margin-bottom: 10px;
    }

    .edu-text h4 {
      font-size: 1.2em;
      margin-top: 15px;
      margin-bottom: 5px;
      color: #444;
    }

    .edu-text p {
      font-size: 0.98em;
      margin-bottom: 10px;
      color: #555;
    }

    .edu-image {
      text-align: center;
    }

    .edu-image img {
      max-width: 100%;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .download-link {
      display: inline-block;
      margin-top: 10px;
      color: #1d4ed8;
      text-decoration: underline;
      font-size: 0.95em;
    }

    .download-link:hover {
      color: #2563eb;
    }

    /* --- Search & Filter --- */
    .video-search-section h2 {
      margin-top: 60px;
    }

    .search-filter-row {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      margin: 20px 0 30px;
    }

    .video-search-input {
      padding: 10px;
      width: 200px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .video-filter-select {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .search-btn {
      padding: 10px 20px;
      background-color: #facc15;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .search-btn:hover {
      background-color: #eab308;
    }

    /* --- Video Grid --- */
    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
    }

    .video-card {
      background: #fff;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .video-card:hover {
      transform: translateY(-5px);
    }

    .video-card iframe {
      width: 100%;
      height: 200px;
      border-radius: 8px;
    }

    .video-card h3 {
      font-size: 1.1em;
      margin-top: 10px;
    }

    .video-card p {
      font-size: 0.95em;
      color: #555;
    }

    /* --- Responsive --- */
    @media screen and (max-width: 768px) {
      .edu-box {
        grid-template-columns: 1fr;
      }

      .video-search-input,
      .video-filter-select,
      .search-btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
    <!-- Navigation -->
      <?php include 'Navigation.php' ?>

  <div class="container">

    <h2>Educational Resources</h2>

    <!-- Infographic Sections -->
    <section class="edu-section">

      <!-- Healthy Eating Pyramid -->
      <div class="edu-box">
        <div class="edu-text">
          <h3>🌱 Healthy Eating From Head to Toe</h3>
          <p>A healthy body starts with healthy food! This colorful guide shows how different foods help each part of your body stay strong and active.

Carrots, sweet potatoes, and spinach help your eyes see clearly.

Nuts, leafy greens, and fish support your brain to think and learn.

Milk, eggs, and beans keep your hair shiny and healthy.

Yogurt, apples, and almonds help your digestive system stay happy.

Tomatoes, carrots, and oranges protect your skin and keep it glowing.

Whole grains, fish, and vegetables are good for your heart.

Cheese and milk keep your teeth and bones strong.

Bananas, chicken, and beans help build strong muscles.</p>

<p>👉 Eat a rainbow of healthy foods every day and fuel your body from head to toe!</p>

<h3>⚖️ Balance Is the Key!</h3>
          <p>Eating healthy doesn't mean eating only one type of food. Your body needs a balance of fruits, vegetables, grains, protein, and dairy to stay strong and active. Even healthy foods should be eaten in the right amount. Too much of one thing — even fruits or milk — isn’t always good.<br>

🔸 Take care of your health by eating a variety of foods.<br>
🔸 Drink plenty of water.<br>
🔸 And remember: Everything in balance!</p>


          
        </div>
        <div class="edu-image">
          <img src="image/edu1.jpg" alt="Healthy Food " />
          <a href="file_download_1.php" class="download-link">Download Infographic</a>
        </div>
      </div>

      <!-- Renewable Energy in Food Industry -->
      <div class="edu-box">
        <div class="edu-text">
          <h3>🌍 Start With Small Actions – Help Save the Earth</h3>
          <h4>We can all help the planet. Here are some simple ways:</h4>
          <p><strong>🚗 Use electric cars:</strong>  They make less air pollution and fewer greenhouse gases.</p>
          <p><strong>🚌 Take public transport or walk: </strong>Buses, bikes, and walking help the air and are good for your health.</p>
          <p><strong>💡 Save energy:</strong>  Use less electricity. Turn off lights and unplug things when not in use.</p>
          <p><strong>🌳 Plant trees:</strong> Trees clean the air and help reduce carbon dioxide.</p>
          <p><strong>♻️ Reduce, reuse, and recycle:</strong>  Buy fewer things, fix old items, and recycle what you can.</p>
          <p><strong>🥗 Eat less meat :</strong> Plant-based food is better for the planet. It uses less energy, land, and water.</p>

          <h4>Integrating Sustainable Energy</h4>
          <p><strong>Solar Energy:</strong> Solar panels reduce energy costs in food facilities.</p>
          <p><strong>Wind Energy:</strong> Wind turbines generate power for food production.</p>
          <p><strong>Bioenergy:</strong> Converts food/agricultural waste into energy.</p>
          
        </div>
        <div class="edu-image">
          <img src="image/edu2.jpg" alt="Renewable Energy Infographic" />
          <a href="file_download.php" class="download-link">Download Infographic</a>
        </div>
      </div>

    </section>

    <!-- Search & Filter -->
    <section class="video-search-section">
      <h2>Educational Videos</h2>
      <div class="search-filter-row">
        <input type="text" placeholder="Search videos..." class="video-search-input" />
        <select class="video-filter-select">
          <option value="all">All Categories</option>
          <option value="solar">Solar Energy</option>
          <option value="food">Sustainable Food</option>
          <option value="waste">Food Waste</option>
        </select>
        <button class="search-btn">Search</button>
      </div>
    </section>

    <!-- Video Grid -->
    <section class="video-grid-section">
      <div class="video-grid" id="videoGrid">

        <!-- Video Card 1 -->
        <div class="video-card" data-category="solar">
          <iframe src="https://www.youtube.com/embed/OiPWsnG2Rcc" frameborder="0" allowfullscreen></iframe>
            
            
          <h3>How Solar Energy Powers Kitchens</h3>
          <p>Learn how solar energy is used in food processing and daily cooking.</p>
        </div>

        <!-- Video Card 2 -->
        <div class="video-card" data-category="waste">
          <iframe src="https://www.youtube.com/embed/ishA6kry8nc" frameborder="0" allowfullscreen></iframe>
            
          <h3>Reducing Food Waste</h3>
          <p>Tips to minimize food waste and turn scraps into compost.</p>
        </div>

        <!-- Video Card 3 -->
        <div class="video-card" data-category="food">
          <iframe src="https://www.youtube.com/embed/YWxTAjDoNl8" frameborder="0" allowfullscreen></iframe>
            
          <h3>Renewable Energy in Food Industry</h3>
          <p>Discover how clean energy is integrated into modern food production.</p>
        </div>

      </div>
    </section>

  </div>

  <!-- JavaScript: Search + Filter -->
  <script>
    document.querySelector('.search-btn').addEventListener('click', function () {
      const searchInput = document.querySelector('.video-search-input').value.toLowerCase();
      const selectedCategory = document.querySelector('.video-filter-select').value;
      const videoCards = document.querySelectorAll('.video-card');

      videoCards.forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const category = card.getAttribute('data-category');

        const matchesSearch = title.includes(searchInput);
        const matchesCategory = (selectedCategory === 'all') || (category === selectedCategory);

        card.style.display = (matchesSearch && matchesCategory) ? 'block' : 'none';
      });
    });
  </script>

  <!-- Footer -->
<?php include 'footer.php' ?>


</body>
</html>
