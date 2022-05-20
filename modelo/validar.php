<?php

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

session_start();

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","prueba");

$consulta="SELECT*FROM tabla WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");
}else{
    if($filas['id_cargo']==2){ //cliente
        header("location:../index.php");
        }
        else{
            if($filas['id_cargo']==3){ //director
                header("location:director.php");
            }
            else{
                ?>
                <?php

                header("location:../error.php");

                ?>

                <?php
            }
        }
    }

mysqli_free_result($resultado);
mysqli_close($conexion);
?>