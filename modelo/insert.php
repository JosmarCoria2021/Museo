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
<?php
include("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio_normal=$_POST['precio_normal'];
$precio_rebajado=$_POST['precio_rebajado'];
$cantidad=$_POST['cantidad'];
$imagen=$_POST['imagen'];
$id_categoria=$_POST['id_categoria'];

$query_insert= mysqli_query($conexion,"INSERT INTO productos VALUES($id,'$nombre','$descripcion','$precio_normal','$precio_rebajado','$cantidad','$imagen','$id_categoria')");

if($query_insert){
    Header("Location: update2.php");
    
}else {
}
?>

<?php
include_once("../pie.html");
?>

</body>

</html>