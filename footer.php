<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Footer Page</title>
	<style>
		/* Footer Styles */
		.site-footer {
			background: linear-gradient(to right, #fcd34d, #fff);
			color: #333;
			padding: 40px 0 20px;
			font-family: 'Arial', sans-serif;
		}

		.footer-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 20px;
			gap: 30px;
		}

		.footer-brand {
			flex: 1 1 300px;
		}

		.footer-brand h2 {
			color: #d97706;
			margin-bottom: 15px;
			font-size: 24px;
		}

		.footer-brand p {
			line-height: 1.6;
			margin-bottom: 20px;
		}

		.footer-column {
			flex: 1 1 200px;
			margin-bottom: 20px;
		}

		.footer-column h3 {
			color: #d97706;
			margin-bottom: 20px;
			font-size: 18px;
			position: relative;
			padding-bottom: 10px;
		}

		.footer-column h3::after {
			content: '';
			position: absolute;
			left: 0;
			bottom: 0;
			width: 50px;
			height: 2px;
			background-color: #f59e0b;
		}

		.footer-column ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.footer-column ul li {
			margin-bottom: 10px;
		}

		.footer-column ul li a {
			color: #444;
			text-decoration: none;
			transition: color 0.3s;
		}

		.footer-column ul li a:hover {
			color: #b45309;
		}

		.footer-bottom {
			text-align: center;
			padding-top: 20px;
			margin-top: 30px;
			border-top: 1px solid rgba(0, 0, 0, 0.1);
		}

		.footer-bottom p {
			margin: 0;
			color: #666;
			font-size: 14px;
		}

		@media (max-width: 768px) {
			.footer-container {
				flex-direction: column;
				gap: 30px;
			}

			.footer-column {
				flex: 1 1 100%;
			}
		}

		@media (max-width: 480px) {
			.site-footer {
				padding: 30px 15px;
			}

			.footer-brand, .footer-column {
				padding: 0;
			}
		}
	</style>
</head>
<body>

<footer class="site-footer">
	<div class="footer-container">
		<div class="footer-brand">
			<h2>Food Fusion</h2>
			<p>We provide delicious recipes and creative food inspiration for your daily cooking journey. Learn, cook, and share with the Food Fusion community.</p>
		</div>

		<div class="footer-column">
			<h3>Services</h3>
			<ul>
				<li><a href="#">Culinary Programs</a></li>
				<li><a href="#">Educational Courses</a></li>
				<li><a href="#">Digital Cookbooks</a></li>
			</ul>
		</div>

		<div class="footer-column">
			<h3>Useful Links</h3>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Recipe Collection</a></li>
				<li><a href="#">Community Cook Book</a></li>
				<li><a href="#">Resources</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>

		<div class="footer-column">
			<h3>Contact Us</h3>
			<ul>
				<li><a href="tel:09667033456">09667033456</a></li>
				<li><a href="tel:09556744321">09556744321</a></li>
				<li><a href="http://www.foodfusion.com">www.foodfusion.com</a></li>
				<li><a href="mailto:info@foodfusion.com">info@foodfusion.com</a></li>
				<li>Yangon, Hlaing Myoh Nal (13), 12st Street</li>
			</ul>
		</div>
	</div>

	<div class="footer-bottom">
		<p>&copy; 2025. All rights reserved by Food Fusion</p>
	</div>
</footer>

</body>
</html>
