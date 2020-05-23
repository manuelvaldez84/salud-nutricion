<html>
      <head>
         <title>Listar</title>
	<link rel="stylesheet" href="estilos2.css">
      </head>
      <body>
	  <div id="main-container">
	  <form action="home.php" method="post">
				<input type="submit" value="Volver al Menu" id="menu" class="menu">
				</form>
		<table>
		<thead>
		<tr>
		<th>Nombre Revista</th>
		<th>Paginas</th>
		<th>Fecha</th>
		</tr>
		</thead>
		         <?php
		 include ('conexion.php');
            $con=mysqli_connect($server, $username, $password, $bd) or
            die("Problemas con la conexión");
            
          //  $registros=mysqli_query($con,"select * from libros where id_libro = $_REQUEST[codigo]") or
		  $query=mysqli_query($con,"select nombre_revista, total_paginas, fecha_publicacion from revistas") or
            die("Problemas en el select:".mysqli_error($con));
			
	     
            while ($reg=mysqli_fetch_array($query))
            {
				?>
				<tr>
				<td><?php echo $reg['nombre_revista']?></td>
				<td><?php echo $reg['total_paginas']?></td>
				<td><?php echo $reg['fecha_publicacion']?></td>
				</tr>
				</div>
			
            <?php
            }
		      
            echo "<h3>Se relacionan los datos de las revistar existentes</h3><br><br>";
            ?>
      </body>
   </html>

