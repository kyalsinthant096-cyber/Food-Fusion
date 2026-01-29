<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Culinary Resources Page</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #fff;
      color: #333;
    }

    .culinary-section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .culinary-section h2 {
      text-align: center;
      font-size: 2.2rem;
      margin-bottom: 40px;
      color: #d97706;
    }

    .download-cards,
    .tutorials,
    .video-tutorials {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      margin-bottom: 60px;
    }

    .card,
    .tutorial,
    .video-card {
      background: #fffbea;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover,
    .tutorial:hover,
    .video-card:hover {
      transform: translateY(-5px);
    }

    .card img,
    .tutorial img,
    .video-card iframe {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .card h3,
    .tutorial h3,
    .video-card h3 {
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #78350f;
    }

    .download-btn {
      display: inline-block;
      background: #fbbf24;
      color: #000;
      padding: 10px 16px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }

    .download-btn:hover {
      background-color: #f59e0b;
      color: #fff;
    }

    .download-section {
      text-align: center;
      padding: 50px 20px;
      background-color: #fffbea;
    }

    .download-section h2 {
      font-size: 2rem;
      color: #b45309;
      margin-bottom: 30px;
    }

    .download-list {
      list-style: none;
      padding: 0;
      max-width: 700px;
      margin: 0 auto;
    }

    .download-list li {
      background-color: #fef3c7;
      border: 1px solid #fde68a;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 12px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .download-list span {
      font-size: 1.1rem;
      font-weight: 600;
      color: #1f2937;
    }

    @media (max-width: 600px) {
      .culinary-section h2 {
        font-size: 1.6rem;
      }

      .download-list li {
        flex-direction: column;
        align-items: flex-start;
      }

      .download-btn {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<!-- Navigation -->
<?php include 'Navigation.php' ?>

<section class="culinary-section">
  <h2>📄 Downloadable Recipe Cards</h2>
  <div class="download-cards">
    <div class="card">
      <img src="image/resources1.jpg" alt="Recipe 1">
      <h3>Mantou Lobster Rolls</h3>
      <a href="image/resources1.jpg" class="download-btn" download>Download (500 KB)</a>
    </div>
    <div class="card">
      <img src="image/resources2.jpg" alt="Recipe 2">
      <h3>Tilo apple crumble🍏</h3>
      <a href="image/resources2.jpg" class="download-btn" download>Download (420 KB)</a>
    </div>
    <div class="card">
      <img src="image/resources3.jpg" alt="Recipe 3">
      <h3>OKONOMIYAKI FRIES</h3>
      <a href="image/resources3.jpg" class="download-btn" download>Download (610 KB)</a>
    </div>
    <div class="card">
      <img src="image/resources5.jpg" alt="Recipe 4">
      <h3>Philly Cheese eggrolls</h3>
      <a href="image/resources5.jpg" class="download-btn" download>Download (480 KB)</a>
    </div>
  </div>

  <h2>🍳 Cooking Tutorials with Photos</h2>
  <div class="tutorials">
    <div class="tutorial">
      <img src="image/cooking2.jpg" alt="Tutorial 1">
      <h3>How to Make Perfect Boiled Eggs</h3>
      <p>To make perfect boiled eggs, start by bringing a pot of water to a boil. Gently lower your eggs into the water using a spoon, then reduce the heat to a simmer. For soft-boiled eggs, cook for 6 minutes; for medium-boiled, cook for 8–9 minutes; and for hard-boiled, cook for 11–12 minutes. Once done, immediately transfer the eggs to a bowl of ice water and let them sit for at least 5–10 minutes to stop the cooking and make peeling easier. Peel under running water, and you’ll have smooth, perfectly boiled eggs every time.</p>
    </div>
    <div class="tutorial">
      <img src="image/cooking1.jpg" alt="Tutorial 2">
      <h3>Knife Skills 101</h3>
      <p>Good knife skills make cooking faster, safer, and more fun. First, always use a sharp knife—a dull blade is more dangerous because it slips easily. Hold the knife with a firm grip: pinch the blade with your thumb and index finger, then wrap the rest of your fingers around the handle. Use your non-cutting hand like a claw, tucking your fingertips in to guide the food and protect your fingers. Start practicing basic cuts like slicing (for even, thin pieces), dicing (small cubes), and chopping (quick rough cuts). For example, slice an onion by cutting it in half, placing the flat side down, then making vertical and horizontal cuts. Remember: let the knife do the work, use a smooth rocking motion, and keep the tip slightly touching the board. Practice slowly and build speed over time.</p>
    </div>
  </div>

  <h2>🎥 Cooking Tutorials & Kitchen Hacks</h2>
  <div class="video-tutorials">
    <div class="video-card">
      <iframe width="100%" height="200" src="https://www.youtube.com/embed/eyxoyzdsCeY" frameborder="0" allowfullscreen></iframe>
      <h3>Speed Peeling Garlic Hack</h3>
    </div>
    <div class="video-card">
      <iframe width="100%" height="200" src="https://www.youtube.com/embed/42MTEEmme3s" frameborder="0" allowfullscreen></iframe>
      <h3>Make Fluffy Omelets Easily</h3>
    </div>
    <div class="video-card">
      <iframe width="100%" height="200" src="https://www.youtube.com/embed/qM6ywe6LS7k" frameborder="0" allowfullscreen></iframe>
      <h3> Knife Skills</h3>
    </div>
  </div>
</section>

<section class="download-section">
  <h2>📥 Downloadable Resources</h2>
  <ul class="download-list">
    <li>
      <span>📄 Cook Book.pdf</span>
      <a href="pdf_download/Soup_of_Cookbook.pdf" download class="download-btn">📥 Download (750 KB)</a>
    </li>
    <li>
      <span>📄 Easy Recipes.pdf</span>
      <a href="pdf_download/Easy Recipes.pdf" download class="download-btn">📥 Download (520 KB)</a>
    </li>
    <li>
      <span>📄 9 Time Saving Cooking Tips.pdf</span>
      <a href="pdf_download/9 times Saving Cooking Tips.pdf" download class="download-btn">📥 Download (340 KB)</a>
    </li>
  </ul>
</section>

<!-- Footer -->
<?php include 'footer.php' ?>

</body>
</html>
