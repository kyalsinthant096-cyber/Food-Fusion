<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Join Us Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Button to Open Form -->
<button id="openFormBtn">Join Us</button>

<!-- Pop-up Form -->
<div class="form-popup" id="joinForm">
  <form class="form-container">
    <h2>Join Us</h2>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Register</button>
    <button type="button" class="btn cancel" id="closeFormBtn">Close</button>
  </form>
</div>

<script src="script.js"></script>
</body>
</html>
