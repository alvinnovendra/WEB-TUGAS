<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php 
 		session_start();
 		$user = $_REQUEST['username'];
 		$_SESSION['namaUser'] = $user;
 	?>
	</head>
<body>
	<?php 
		header("Location:Homepage.php");
		exit();
	?>
</body>
</html>