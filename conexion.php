<?php  
	$servername = "localhost";
	$username = "root";
	$password = "Juan0912*";
	$dbname = "personal";

	// crear conexion
	$conn = mysqli_connect($servername, $username,$password,$dbname);

	// comprobar conexion

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>