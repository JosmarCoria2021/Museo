<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
	<link href="css/leyendas.css" rel="stylesheet" />
</head>
<body>
<?php
include_once("cabecera.html");
include_once("aside.html");
?>
        <section>
			<h1 id="info">Error</h1>
			<h4 id="info"><?php echo((isset($_REQUEST["sError"]))? $_REQUEST["sError"]: "ERROR DE AUTENTIFICACION"); ?></h4>
		
			<?php
				if (isset($_SESSION["oUsu"])){
			?>
				<a href="inicio.php">Regresar al inicio</a>
			<?php
				}else{
			?>
				<a href="index.php">Regresar al inicio</a>
			<?php
				}
			?>
		</section>
<?php
include_once("pie.html");
?>
</body>
</html>