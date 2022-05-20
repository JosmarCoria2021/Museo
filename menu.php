
        <nav class="menu">
            <?php
				if (isset($_SESSION["tipo"])){
					if ($_SESSION["tipo"]=="Administrador"){
			
					}
			?>
        <ul>
          <li><a href="tabpersonal.php" class="menu">ABC personal</a></li>
          <li><a href="tabpacientes.php" class="menu">ABC pacientes</a></li>
  				<li><a href="logout.php" class="menu">Salir</a></li>
        </ul>

			<?php
				} else {
			?>
			<ul>
			<li> <a href="index.php" class="menu">Inicio</a> </li>
				<li> <a href="galeria.php" class="menu">Galería</a> </li>
				<li> <a href="agendar.php" class="menu">Agendar visita</a> </li>
				<li> <a href="tienda.php" class="menu">Tienda</a> </li>
				<li> <a href="mailto:andreacoss123@gmail.com" class="menu">Contactar al director</a> </li>
			</ul> 
			<?php
				}
			?>
        </nav>
