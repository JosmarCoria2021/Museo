<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Museo La Casa Del Nahual De Nogales Veracruz</title>

    <link rel="stylesheet" href="css/estiloal.css" type="text/css">
  </head>
  <body>
    <?php
  include_once("cabecera.html");
		include_once("menu.php");
    ?>

    <div class="contenedor">
      <h1>Pase De Entrada Al Museo</h1>

        <div class="contenido">

          <form class="" action="respuesta.php" method="post">

            <div class="informacion">

                  <div class="campo">
                      <label for="nombre">Nombre
                          <input type="text" name="nombre" id="nombre">
                      </label>
                  </div>
                  <div class="campo">
                      <label for="apellido">Apellido
                          <input type="text" name="apellido" id="apellido">
                      </label>
                  </div>
                <hr>
                  <!-- Desde un checkbox-->
                  <div class="campo1">
                      <label for="notificaciones">Notificar Eventos
                          <input type="checkbox" name="notificaciones" id="notificaciones">
                      </label>
                  </div>
          </div> <!--.informacion-->
          <hr>

                  <!-- Desde array de Checkboxes-->
                  <div class="cursos">
                            <h4>Actividad</h4>
                            <div class="campo">
                                <label for="html5">Acceso
                                    <input type="checkbox" name="curso[]" value="Acceso" id="ac">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="css3">Recorrido Guiado
                                    <input type="checkbox" name="curso[]" value="Recorrido Guiado" id="rg">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="javascript">Evento
                                    <input type="checkbox" name="curso[]" value="Evento" id="ev">
                                </label>
                            </div>
                  </div>

                <hr>
                  
                  <div class="especializacion">
                    <h4>Horario</h4>

                        <select name="area" value="-Any-">
                            <option>- Selecciona un horario -</option>
                            <option value="ma">Mañana (10:00-12:00 Hrs)</option>
                            <option value="ta">Tarde (12:00-18:00 Hrs)</option>
                            <option value="no">Noche (19:00-Hora de cierre)</option>
                        </select>
                  </div>

            <hr>

            <div class="tipo_curso">
                  <h4>Tipo De Visita</h4>
                  <?php  $opciones = array(
                      'pres' => 'Presencial',
                      'online' => 'Virtual'
                  );?>


                  <?php foreach($opciones as $key => $opcion) {
                    echo "<div class='campo'>";
                    echo "<input type='radio' name='opciones' value='$key' > $opcion";
                    echo "</div>";
                  } ?>
            </div>

            <div class="textarea">
                  <div class="campo">
                    <label for="mensaje"> Mensaje Al Director <br/>
                        <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
                    </label>
                    <input class="boton" type="submit">
                  </div>
            </div>
          </form>


        </div>
    </div>


    <?php
    include_once("pie.html")
    ?>

  </body>
</html>
