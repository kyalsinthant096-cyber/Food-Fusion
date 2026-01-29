<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Process</title>
</head>
<body>
	<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email	 = $_POST['email'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
 
/*echo "$fname<br>";
echo "$lname<br>";
echo "$email<br>";
echo "$dob<br>";
echo "$phone<br>";
echo "$gender<br>";*/
 
inclide("dbconnection.php")
 
?>

</body>
</html>