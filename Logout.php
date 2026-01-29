<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>
</head>
<body>
	<?php
		session_destroy(); // destroy all sessions

		unset($_SESSION['role']); //role session only

		echo "<script>
				alert('You are successfully logout!');
				window.location.href='home_pg.php';
			  </script>";
	?>
</body>
</html>