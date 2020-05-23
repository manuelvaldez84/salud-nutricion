<?php
include'conexion.php';
	
$con = mysqli_connect($server, $username, $password, $bd) or die("Problema al conectar con el servidor");

session_start();
$usuario=$_POST['login'];
$pass=$_POST['password'];


$sesion= "SELECT COUNT(*) as contar from usuarios where login= '$usuario' and password= '$pass'";
$consulta=mysqli_query($con,$sesion);
$array=mysqli_fetch_array($consulta);

if($array['contar']>0){
	$_SESSION['username']=$usuario;
	header("location: menu.php");
		
}else{
	echo '<script>
	alert("Datos Incorrectos");
	window.history.go(-1);
		</script>';
}
		
?>