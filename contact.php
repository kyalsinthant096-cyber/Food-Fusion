<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us Page</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #fff;
      color: #333;
    }

    /* Hero Section with Overlay Text */
    .hero {
      background: url('image/contact_us.jpg') center/cover no-repeat;
      height: 60vh;
      position: relative;
      display: flex;
      align-items: center;
      padding-left: 60px;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
    }

    .hero h1 {
      position: relative;
      z-index: 1;
      color: #fff;
      font-family: 'Playfair Display', serif;
      font-size: 3em;
      max-width: 600px;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
    }

    /* Contact Section */
    /* .contact-section {
      padding: 60px 20px;
      background-color:white;
      
    } */
     .contact-section {
    position: relative;
    background: url(contactbg.jbg) no-repeat center center / cover;
    padding: 60px 20px;
    color: white;
    background-color:rgb(240, 217, 141);
}

    .contact-content {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .contact-text {
      flex: 1 1 500px;
    }

    .contact-text h2 {
      font-family: 'Playfair Display', serif;
      color: #ff6600;
      font-size: 2.5em;
      margin-bottom: 15px;
    }

    .contact-text p {
      font-size: 1.15em;
      font-style: italic;
      color: #555;
      line-height: 1.7;
      margin-bottom: 30px;
    }

    .contact-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
     
    }

    .contact-info {
      flex: 1;
      background-color:rgb(48, 46, 23);
      padding: 20px;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .contact-info:hover {
      transform: scale(1.02);
    }

    .contact-info h3 {
      color: #cc5200;
      font-size: 1.3em;
      margin-bottom: 10px;
    }

    .contact-info ul {
      list-style: none;
      padding: 0;
    }

    .contact-info li {
      margin-bottom: 10px;
      font-size: 1.05em;
    }

    .contact-info i {
      color: #ff6600;
      margin-right: 10px;
    }

    .contact-form {
      flex: 2;
      background-color:rgb(48, 46, 23);
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    }

    .contact-form form {
      display: flex;
      flex-direction: column;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1em;
      background: #fffaf5;
      transition: border 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: #ff6600;
      outline: none;
    }

    .contact-form button {
      background-color: #ff6600;
      color: white;
      padding: 12px;
      border: none;
      font-size: 1em;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-form button:hover {
      background-color:rgba(230, 123, 0, 0.9);
    }

    .map iframe {
      width: 100%;
      height: 300px;
      border-radius: 10px;
      border: none;
      margin-top: 30px;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .contact-content {
        flex-direction: column;
      }

      .hero {
        padding-left: 30px;
        height: 40vh;
      }

      .hero h1 {
        font-size: 2em;
      }
    }
  </style>
</head>

<body>

  <?php include 'Navigation.php' ?>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Welcome to Food Fusion – Where Flavor Meets Passion</h1>
  </div>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="contact-content">
      <div class="contact-text">
        <h2>Contact Us</h2>
        <p>
          Have a question or just want to share your food story? We’re here to help and excited to hear from you. Fill out the form below or reach us directly — let's connect!
        </p>

        <div class="contact-wrapper">
          <div class="contact-info">
            <h3>Contact Information</h3>
            <ul>
              <li><i class="fas fa-phone"></i> 09667033456</li>
              <li><i class="fab fa-whatsapp"></i> 09556744321</li>
              <li><i class="fas fa-envelope"></i> contact@foodfusion.com</li>
            </ul>
          </div>

          <div class="contact-form">
            <form method="POST" action="save_feedback.php">
              <input type="text" name="name" placeholder="Your Name" required />
              <input type="email" name="email" placeholder="Your Email" required />
              <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
              <button type="submit">Send Message</button>
            </form>

          </div>
        </div>

        <div class="map">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.129646661038!2d96.1458456148677!3d16.7984459237558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194fdb3c0cbd7%3A0x8fda49f4d26f95db!2sSule%20Pagoda!5e0!3m2!1sen!2smm!4v1623677804244!5m2!1sen!2smm" 
            allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php' ?>
</body>
</html>
