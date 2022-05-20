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

$sql="UPDATE productos SET  nombre='$nombre',descripcion='$descripcion',precio_normal='$precio_normal',precio_rebajado='$precio_rebajado',
cantidad='$cantidad',imagen='$imagen',id_categoria='$id_categoria' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: update2.php");
    }
?>