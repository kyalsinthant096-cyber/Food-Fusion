<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>


	<style>
		/* Background Image */
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Login Box */
.login-container {
  background: rgba(255, 255, 224, 0.9); /* Light yellow transparent */
  padding: 40px;
  border-radius: 10px;
  width: 320px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.login-form h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #333;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 12px 15px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 15px;
  background: #fffde7;
}

.login-form .checkbox {
  margin: 15px 0;
  font-size: 14px;
}

.login-form .checkbox a {
  color: #b58900;
  text-decoration: none;
}

.login-form button {
  width: 100%;
  padding: 12px;
  background-color: #ffeb3b;
  border: none;
  border-radius: 6px;
  font-weight: bold;
  font-size: 16px;
  color: #444;
  cursor: pointer;
  transition: background 0.3s;
}

.login-form button:hover {
  background-color: #fdd835;
}

.register-link,
.home-link {
  text-align: center;
  margin-top: 15px;
  font-size: 14px;
}

.register-link a,
.home-link a {
  color: #ff9800;
  text-decoration: none;
}
	</style>

</head>
<body>
		 <div class="login-container">
    <form action="login_Process.php" method="post" class="login-form">
      <h2>Welcome Back</h2>

      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>

      <div class="checkbox">
        <label>
          <input type="checkbox" required> I agree to the 
          <a href="privacypolicy.php" target="_blank">Privacy Policy</a>
        </label>
      </div>

      <button type="submit">Login</button>

      <p class="register-link">Don't have an account? <a href="Reg_form.php">Register</a></p>
      <p class="home-link"><a href="foodfusionhome.php">Back to Home</a></p>
    </form>
  </div>

</body>
</html>