<?php
  session_start();

  require 'modelo/db.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombre, password FROM tabla WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<form action="modelo/validar.php" method="post">

<h1 class="animate__animated animate__backInLeft">Ingresa</h1>

<p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

<p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contrasena"></p>



<input type="submit" value="Ingresar">

</form> 
   
  <form action="signup.html">
   <h1 class="animate__animated animate__backInLeft">Registrarse</h1>
    
      <input type="submit" value="hacerlo ahora">
    </form>

   
   








</body>
</html>