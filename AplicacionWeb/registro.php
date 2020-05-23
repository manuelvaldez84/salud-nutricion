<?php

include 'conexion.php';

$usuario=$_POST['usuario'];
if(isset($_POST['usuario']) && !empty($_POST['usuario'])&&
		isset ($_POST['pass']) && !empty($_POST['pass']) &&
		isset ($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset ($_POST['correo']) && !empty($_POST['correo'])){
		
$con = mysqli_connect($server, $username, $password, $bd) or die("Problema al conectar con el servidor");
$insertar="INSERT INTO usuarios(login, password, nombre, correo) VALUES('$_POST[usuario]', '$_POST[pass]', '$_POST[nombre]', '$_POST[correo]')";    

$verificar_usuario=mysqli_query($con, "SELECT * FROM usuarios WHERE login='$usuario'");
if (mysqli_num_rows($verificar_usuario)>0){
echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
exit;
}

$resultado=mysqli_query($con, $insertar);
if(!$resultado){
	echo "Error al registrarse";
}
else{
	echo '<script>
	alert("Usuario Registrado Exitosamente. Por favor proceda a iniciar sesion");
	window.history.go(-1);
	</script>';
	
}
	mysqli_close($con);
}

?>