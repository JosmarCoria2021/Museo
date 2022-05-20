<?php

require 'modelo/db.php';
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$id_cargo = $_POST['id_cargo'];

$query_insert = mysqli_query($conn,"INSERT INTO tabla(nombre,usuario,contrasena,id_cargo) VALUES('$nombre','$usuario','$contrasena','$id_cargo')");

if($query_insert)
{ 
    echo "Datos enviados correctamente";
}   
else{
    echo "Error al enviar datos";
}

?>

