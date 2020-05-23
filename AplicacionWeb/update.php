  <?php
  include ('conexion.php');
	include ('modifica.php');
		
    $con=mysqli_connect($server, $username, $password, $bd) or
       die("Problemas con la conexion");


$registro="UPDATE libros set titulo='$_POST[titulo]' where id_libro='$_POST[codigo]'"
or die("Problemas con la actualizacion");
echo "Datos Actualizados";
		
?>