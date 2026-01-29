<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Form</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background: linear-gradient(to right, #fcd34d, #fff);
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			flex-direction: column;
		}

		h1 {
			color: #b45309;
			margin-bottom: 20px;
			text-align: center;
			font-size: 32px;
		}

		form {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0,0,0,0.1);
			width: 100%;
			max-width: 500px;
		}

		form input[type="text"],
		form input[type="email"],
		form input[type="password"],
		form input[type="file"],
		form select {
			width: 100%;
			padding: 12px 15px;
			margin: 10px 0;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			transition: border 0.3s;
		}

		form input[type="text"]:hover,
		form input[type="email"]:hover,
		form input[type="password"]:hover,
		form input[type="file"]:hover,
		form select:hover {
			border-color: #f59e0b;
		}

		form input[type="submit"] {
			width: 48%;
			padding: 12px;
			border: none;
			border-radius: 5px;
			color: white;
			background-color: #f59e0b;
			font-size: 16px;
			cursor: pointer;
			margin-top: 15px;
			transition: background 0.3s;
		}

		form input[type="submit"]:hover {
			background-color: #d97706;
		}

		.btn {
			background-color: #ccc;
		}

		.btn:hover {
			background-color: #999;
		}

		@media (max-width: 600px) {
			form {
				padding: 20px;
			}

			form input[type="submit"] {
				width: 100%;
				margin-top: 10px;
			}
		}
	</style>
</head>
<body>


<h1>Register Form</h1>

<form action="Reg_Process.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="fname" placeholder="Enter Your First Name"> 
	<input type="text" name="lname" placeholder="Enter Your Last Name"> 
	<input type="email" name="email" placeholder="Enter Your Email"> 
	
	<?php
		$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
		sort($countries);
		echo "<select name='country'>";
		foreach ($countries as $country) {
			echo "<option value='$country'>$country</option>";
		}
		echo "</select>";
	?>

	<input type="file" name="profile">
	<input type="text" name="username" placeholder="Enter User Name">
	<input type="password" name="pw" placeholder="Enter Password">
	
	<div style="display: flex; gap: 4%; flex-wrap: wrap;">
		<input type="submit" name="submit" value="Register">
		<input type="submit" class="btn" value="Clear">
	</div>
</form>

</body>
</html>
