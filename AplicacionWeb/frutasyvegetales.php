<html>
      <head>
         <title>Frutas y Vegetales</title>
		 <link rel="stylesheet" href="estilos2.css">
      </head>
      <body>
	  <div id="main-container">
	  <form action="consulta.html" method="post">
				<input type="submit" value="Volver al Menu de Consultas" id="menu" class="menu">
				</form>
		<table>
		<thead>
		<tr>
		<th>Titulo Plato</th>
		<th>Descripcion Plato</th>
		<th>Carbohidratos</th>
		<th>Grasas</th>
		<th>Vitaminas</th>
		<th>Minerales</th>
		<th>Fibra</th>
		</tr>
		</thead>
		         <?php
		 include ('conexion.php');
            $con=mysqli_connect($server, $username, $password, $bd) or
            die("Problemas con la conexión");
            
        
		  $query=mysqli_query($con,"select mn.idmenu, mn.titulo_plato, mn.descripcion_plato, mn.carbohidratos, mn.grasas, mn.vitaminas, mn.minerales, mn.fibra from menus mn where tipo_menu=3") or
            die("Problemas en el select:".mysqli_error($con));
			
	     
            while ($reg=mysqli_fetch_array($query))
            {
				?>
				<tr>
				<td><?php echo $reg['titulo_plato']?></td>
				<td><?php echo $reg['descripcion_plato']?></td>
				<td><?php echo $reg['carbohidratos']?></td>
				<td><?php echo $reg['grasas']?></td>
				<td><?php echo $reg['vitaminas']?></td>
				<td><?php echo $reg['minerales']?></td>
				<td><?php echo $reg['fibra']?></td>
				</tr>
				</div>
			
            <?php
            }
		      
            echo "<h3>Se relacionan los datos de las frutas y vegetales registrados</h3><br><br>";
            ?>
      </body>
   </html>

