<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>About Us - Food Fusion</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<style>
   * {
     box-sizing: border-box;
     margin: 0;
     padding: 0;
     font-family: 'Poppins', sans-serif;
   }
   body {
     background-color: #fffef6;
     color: #333;
     line-height: 1.6;
   }
   h2{
    text-align: center;
   }
   header {
     background-color: #fffef6;
     text-align: center;
     padding: 30px 20px;
   }
   header h1 {
     font-size: 40px;
     color: #78350f;
   }
   section {
     padding: 40px 20px;
   }
   .welcome-section {
     display: flex;
     flex-wrap: wrap;
     align-items: center;
     justify-content: center;
     gap: 40px;
     background-color: #fef3c7;
   }
   .welcome-text, .welcome-img {
     flex: 1 1 300px;
     max-width: 600px;
   }
   .welcome-text h2 {
     font-size: 28px;
     margin-bottom: 15px;
     color: #92400e;
   }
   .welcome-text p {
     font-size: 18px;
   }
   .welcome-img img {
     width: 100%;
     border-radius: 12px;
     box-shadow: 0 4px 10px rgba(0,0,0,0.1);
   }
   .chef-section {
     background-color: #fff7c2;
     text-align: center;
   }
   .chefs {
     display: flex;
     flex-wrap: wrap;
     justify-content: center;
     gap: 20px;
     margin-top: 30px;
   }
   .chef {
     background: #fde68a;
     padding: 20px;
     border-radius: 12px;
     width: 220px;
     box-shadow: 0 4px 8px rgba(0,0,0,0.1);
     transition: transform 0.3s;
   }
   .chef img {
     width: 100%;
     border-radius: 50%;
     margin-bottom: 10px;
   }
   .chef:hover {
     transform: scale(1.05);
   }
   .extra-section-wrapper {
     display: grid;
     grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
     gap: 20px;
     max-width: 1200px;
     margin: 0 auto;
     padding: 20px;
   }
   .extra-section {
     background: #fff9c4;
     padding: 25px;
     border-radius: 12px;
     border: 1px solid #facc15;
     transition: transform 0.3s, box-shadow 0.3s;
   }
   .extra-section:hover {
     transform: translateY(-5px);
     box-shadow: 0 6px 20px rgba(0,0,0,0.1);
   }
   .extra-section i {
     color: #eab308;
     margin-right: 10px;
   }
   .extra-section.full {
     grid-column: span 2;
   }
   .stats {
     text-align: center;
     font-size: 18px;
     margin-top: 15px;
   }
   .traditional-food {
     background-color: #fff7cd;
   }
   .traditional-food .content {
     display: flex;
     flex-wrap: wrap;
     align-items: center;
     gap: 30px;
     justify-content: center;
   }
   .traditional-food img {
     width: 300px;
     border-radius: 10px;
   }
   .traditional-food p {
     max-width: 500px;
     font-size: 18px;
   }
   .video-gallery {
     display: flex;
     flex-wrap: wrap;
     justify-content: center;
     gap: 20px;
    
     
   }
   h3{
    text-align: center;
   }
   .video-gallery iframe {
     width: 320px;
     height: 180px;
     border-radius: 10px;
     box-shadow: 0 4px 8px rgba(0,0,0,0.1);
   }
   @media (max-width: 768px) {
     .extra-section.full {
       grid-column: span 1;
     }
   }
</style>
</head>
<body>
<header>
    <!-- Navigation -->
     <?php include 'Navigation.php' ?>
     <br>
<h1>About Us</h1>
</header>
<section class="welcome-section">
<div class="welcome-text">
<h2><i class="fas fa-envelope-open-text"></i> Welcome to Food Fusion</h2>
<p>
       Thank you for visiting our platform. We bring together chefs,
       food lovers, and culture through the art of cooking.
</p>
</div>
<div class="welcome-img">
<img src="image/about.jpg" alt="Welcome">
</div>
</section>
<section class="chef-section">
<h2><i class="fas fa-users"></i> Meet Our Chefs</h2>
<div class="chefs">
<div class="chef">
<img src="image/myo.jpg" alt="Chef Myo">
<h4>Chef Myo</h4><p>Pastry Expert</p>
</div>
<div class="chef">
<img src="image/Nantaw.webp" alt="Chef Nantaw">
<h4>Chef Nantaw</h4><p>Burmese Cuisine</p>
</div>
<div class="chef">
<img src="image/sukhin.jpg" alt="Chef Su Khin">
<h4>Chef Su Khin</h4><p>Fusion Dishes</p>
</div>
<div class="chef">
<img src="image/AnsabKhan.jpeg" alt="Chef Ansab">
<h4>Chef Ansab</h4><p>Grill Master</p>
</div>
</div>
</section>

<section class="traditional-food">
<h2><i class="fas fa-leaf"></i> Traditional Food Spotlight</h2>
<br>
<div class="content">
<img src="image/zkallrice.jpg" alt="Zaykaw Htamane">
<p>
      Zaykaw Htamane is a delicious traditional Myanmar food that shows the beauty of local culture and cooking. <br>
      It is made fresh with the smell of oil, coconut, and crispy beans, which makes it very tasty and warm. <br>
      The peanut oil and coconut oil have healthy fats like Omega-3, which are good for the heart and brain.<br>
       This food is usually made by a group of people working together, so it also brings family and friends closer.<br>
        If you try it once, you can feel both the rich flavor and the joy of sharing with others.<br>
</p>
</div>
</section>


<section class="extra-section-wrapper">
<div class="extra-section">
<h3><i class="fas fa-bullseye"></i> Our Mission</h3>
<p>Inspire creativity in kitchens by making cooking easy and joyful.</p>
</div>
<div class="extra-section">
<h3><i class="fas fa-heart"></i> Our Core Values</h3>
<p>Quality Ingredients. Honest Cooking. Community Sharing.</p>
</div>
<div class="extra-section">
<h3><i class="fas fa-comment-dots"></i> What Our Users Say</h3>
<p>
       "I’ve improved my home cooking thanks to Food Fusion!" — Ma Ei Mon<br>
       "The chef tips and local recipes are amazing!" — Ko Aung Htet
</p>
</div>
<div class="extra-section">
<h3><i class="fas fa-map-marker-alt"></i> Our Studio Kitchen</h3>
<p>Based in Yangon, we create all content in our studio kitchen.</p>
</div>
<div class="extra-section full">
<h3><i class="fas fa-chart-line"></i> Our Journey So Far</h3>
<p class="stats">
       🍽️ 500+ Recipes Published &nbsp;&nbsp; 👨‍🍳 4 Chefs &nbsp;&nbsp; 🌍 20+ Countries
</p>
</div>
<div class="extra-section full">
<h3><i class="fas fa-video"></i> Watch Our Cooking Videos</h3>
<div class="video-gallery">
<iframe src="https://www.youtube.com/embed/-be9LJN89yI"></iframe>
<iframe src="https://www.youtube.com/embed/nqyrAKnCMZU"></iframe>
<iframe src="https://www.youtube.com/embed/iyVI-5a7vAU"></iframe>
</div>
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>AOS.init({ duration: 1000 });</script>

<!-- footer -->
 <?php include 'footer.php' ?>
</body>
</html>