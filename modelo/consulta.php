<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tienda</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/estilost.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/estilost.css" rel="stylesheet" />
    <link href="../css/cabecera.css" rel="stylesheet" />
    <link href="../css/footer.css" rel="stylesheet" />
    <link href="../css/estilos.css" rel="stylesheet" />
    <style>
        body{
            color:rgb(0, 177, 59);
        }
        
        </style>
</head>
<body>
<?php
include_once("../cabecera.html");
?>

<br>
<?php
include_once("menuadmin.php");
?>
<br>

            <section id="blog">
                <h3 align="center">Inventario</h3><br><br>
                <div class="contenedor">
                <?php 

	        $conexion=mysqli_connect('localhost','root','','tienda');

        ?>
	<table border="1" >
		<tr>
			<td>Id del producto</td>
			<td>Nombre del producto</td>
			<td>Descripción</td>
			<td>Precio normal</td>
			<td>Precio rebajado</td>
			<td>Cantidad</td>
            <td>Imágen</td>
            <td>Id categoría</td>
		</tr>

		<?php 
		$sql="SELECT * from productos";

		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['precio_normal'] ?></td>
			<td><?php echo $mostrar['precio_rebajado'] ?></td>
			<td><?php echo $mostrar['cantidad'] ?></td>
            <td><?php echo $mostrar['imagen'] ?></td>
            <td><?php echo $mostrar['id_categoria'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>    

                </div>
            </section>

<?php
include_once("../pie.html");
?>

</body>

</html>