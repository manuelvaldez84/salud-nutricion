<?php
include ('conexion.php');

if(isset($_POST['tipo_menu']) && !empty($_POST['tipo_menu'])&&
		isset ($_POST['titulo']) && !empty($_POST['titulo'])&&
		isset ($_POST['descripcion']) && !empty($_POST['descripcion'])&&
		isset ($_POST['carbohidratos']) && !empty($_POST['carbohidratos'])&&
		isset ($_POST['grasas']) && !empty($_POST['grasas'])&&
		isset ($_POST['vitaminas']) && !empty($_POST['vitaminas'])&&
		isset ($_POST['minerales']) && !empty($_POST['minerales'])&&
		isset ($_POST['fibra']) && !empty($_POST['fibra'])){
			
$con=mysqli_connect($server, $username, $password, $bd) or
die("Problemas con la conexión");
		mysqli_query($con,("insert into menus(idmenu, titulo_plato, descripcion_plato, tipo_menu, carbohidratos, grasas, vitaminas, minerales, fibra) VALUES('', '$_POST[titulo]', '$_POST[descripcion]', '$_POST[tipo_menu]','$_POST[carbohidratos]', '$_POST[grasas]', '$_POST[vitaminas]', '$_POST[minerales]', '$_POST[fibra]')")) 
or die("Problemas con la conexion");
echo '<script>
alert("Datos Registrados con Exito");
	window.history.go(-1);
	</script>';
	exit;
		}
		
?>