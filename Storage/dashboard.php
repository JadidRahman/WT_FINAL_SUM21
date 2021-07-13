<?php


if(!isset($_COOKIE["loggedUser"])){
	header("Location: login.php");
}

?>

<html>
	<head></head>
	<body>
	    <h3>Dashboard</h3>
		<h2>Welcome, <?php echo $_COOKIE["loggedUser"] ?></p>
	</boady>
</html>