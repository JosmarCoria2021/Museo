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
    <link href="css/estilosadmin.css" rel="stylesheet" />
    <link href="../css/estilost.css" rel="stylesheet" />
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

<?php
$conexion=mysqli_connect('localhost','root','','tienda');
$Id=$_POST['id'];
$Nombre=$_POST['nombre'];
$Descripcion=$_POST['descripcion'];
$Precio_n=$_POST['precio_n'];
$Precio_r=$_POST['precio_r'];
$Cantidad=$_POST['cantidad'];
$Imagen=$_POST['imagen'];
$Id_categoria=$_POST['id_categoria'];


$sql="INSERT INTO `productos`(id, `nombre`, `descripcion`, `precio_normal`, `precio_rebajado`,`cantidad`,`imagen`,`id_categoria`) VALUES('$Id','$Nombre','$Descripcion','$Precio_n','$Precio_r','$Cantidad','$Imagen','$Id_categoria') ";
$result=mysqli_query($conexion,$sql);

if($result)
{ 
         echo "Datos enviados correctamente";
}   
else if($id=$_POST['id']){
    echo "El id ya existe";
}
else{
    echo "Error al enviar datos";
}

?>


<?php
include_once("../pie.html");
?>

</body>

</html>