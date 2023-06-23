<?php 

$mysqli = new mysqli('localhost', 'root', 'Juan0912*', 'personal');

if ($mysqli->connect_error) {

	die('Error en la conexion' . $mysqli->connect_error);
}
echo "Conexion sastifactoria";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$estado_civil = $_POST['estado_civil'];
$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;

$arrayIntereses = null;

$num_array = is_countable($intereses);
$contador = 0;

if ($num_array>0){
	foreach ($intereses as $key => $value) {
		if ($contador != $num_array-1){
			$arrayIntereses .= $value. ' ';
			$contador++;
		} else {
			$arrayIntereses .= $value;
		}
	}
}

$sql = "INSERT INTO personas (nombre, email, telefono, estado_civil, hijos, intereses) VALUES ('$nombre', '$email', '$telefono', '$estado_civil', '$hijos', '$arrayIntereses')";
$resultado = $mysqli->query($sql);

 ?>

 <html lang="es">
 <head>
 	
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootsrtap-theme.css" rel="stylesheet">
	<script scr="js/jquery-3.1.1.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
 </head>

 <body>
 	<div class="container">
 		<div class="row">
 			<div class="row" style="text-align: center">
 				<?php if($resultado) { ?>
 					<h3>REGISTRO GUARDADO</h3>
 				<?php } else { ?>
 					<H3>ERROR AL GUARDAR</H3>
 				<?php } ?>

 				<a href="index.php" class="btn btn-primary">Regresar</a>
 				
 			</div>
 		</div>
 	</div>
 </body>
 </html>

