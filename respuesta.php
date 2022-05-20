<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cita Agendada</title>

    <link rel="stylesheet" href="css/estiloal.css" type="text/css">
  </head>
  <body>
  <?php
  include_once("cabecera.html");
		include_once("menu.php");
    ?>
    <div class="contenedor2">
      <h1>Pase De Entrada Al Museo</h1>
      <?php $resultado = $_POST;?>
      <?php $nombre = $resultado['nombre'];    ?>
      <?php $apellido = $resultado['apellido']; ?>
      <br>  
      <?php 
          // validar inputs
          if(! (filter_has_var(INPUT_POST, 'nombre') && 
                (strlen(filter_input(INPUT_POST,'nombre')) > 0))) {
            echo "El nombre es obligatorio";
          } else {    ?>
              <p>Nombre: <?php echo $nombre; ?></p>
          <?php } ?>
      
          <br>

          <?php if(!isset($apellido) || trim($apellido) != '') { ?>
            <p>Apellido: <?php echo $apellido; ?></p>
          <?php } else {
            echo "El apellido es obligatorio";
      } 
       ?>
      
      <br><hr><br>
      
      <?php //validar checkboxes (singular) ?>
      <?php 
          if(isset($_POST['notificaciones'])) {
              $notificaciones = $_POST['notificaciones'];
              if($notificaciones == 'on') {
                echo "Se le notificará cuando haya eventos";
              }
          } 
       ?>
       
       <br><br><hr><br>
       
       <?php //validar array de checkboxes ?>
       <?php if(isset($_POST['curso'])) {
         $cursos = $_POST['curso'];
         echo "<h2>Actividades</h2><br>";
         echo "Tus actividades son: </br><br>";
         foreach($cursos as $curso) {
           echo $curso . '<br/>';
         }
       } else {
         echo "No elegiste actividades";
       } ?>
       
       <br><hr><br>
       
       <?php //validar Select ?>
       <?php if(isset($_POST['area'])) {
         $area = $_POST['area'];
         
         echo "<h2>Horario</h2><br>";
         switch ($area) {
           case 'ma':
                echo "Mañana (10:00-12:00 Hrs)";
                break;
           case 'ta':
                echo "Tarde (12:00-18:00 Hrs";
                break;
           case 'no':
                echo "Noche (19:00-Hora de cierre)";
                break;
           default:
                echo "Por favor elige un horario";
                break;
         }
       }?>
       
       <br><br><hr><br>
       
       <?php // validar radio buttons ?>
       <?php  $opciones = array(
           'pres' => 'Presencial',
           'online' => 'Virtual'
       );?>
       
       <h2>Modalidad De Visita</h2><br>
       <?php if(array_key_exists($_POST['opciones'], $opciones)) {
         $tipo_curso = $_POST['opciones'];
         switch ($tipo_curso) {
           case 'pres':
               echo "Visita Presencial";
               break;
           case 'online':
              echo "Visita Virtual";
              break;
         }
       } else {
             echo "No elegiste tipo de visita";
       }
       ?>
       
       <br><br><hr><br>
       
       <?php // validando textarea ?>
       <h2>Mensaje Al Director</h2><br>
       <?php if(isset($_POST['mensaje'])) {
         $mensaje = $_POST['mensaje'];
         $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
         if(strlen($nuevo_mensaje) > 0 &&  trim($nuevo_mensaje)) {
           echo  $nuevo_mensaje;
         } else {
           echo "El mensaje esta vacio";
         }
       } ?>

       <div class="regresar">
             <a href="agendar.php"><button class="reg" type="button" ALIGN="CENTER">Regresar al formulario</button></a> 
      </div>
    </div>

    
    <?php
    include_once("pie.html")
    ?>

  </body>
</html>
