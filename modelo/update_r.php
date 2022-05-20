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


$sql="UPDATE productos SET id='$Id',nombre='$Nombre',descripcion='$Descripcion',precio_normal='$Precio_n',precio_rebajado='$Precio_r',cantidad='$Cantidad',imagen='$Imagen',id_categoria='$Id_categoria' WHERE id='$Id'";
$result=mysqli_query($conexion,$sql);

if($result)
{ 
         echo "Datos modificados correctamente";
}   
else{
    echo "Error al modificar datos";
}

?>


<?php
include_once("../pie.html");
?>

</body>

</html>