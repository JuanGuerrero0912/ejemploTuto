<?php  
	require 'conexion.php';

	$id = isset($_GET['id']);

	$sql = "DELETE FROM personas WHERE id = '$id'";
	$resultado = mysqli_query($conn,$sql);
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootsrtap-theme.css" rel="stylesheet">
		<script scr="js/jquery-3.1.1.min.js"></script>
		<script scr="js/bootstrap.min.js"></script>
	</head>
	<body class="container">
		<div class="row">
			<div class="row" style="text-align: center">
				<?php if ($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				<a href="index.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
	</body>
</html>

