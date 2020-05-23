<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modificación de usuario</title>
</head>

<body>

  <?php
  include ('conexion.php');
  
    if(isset($_POST['codigo']) && !empty($_POST['codigo'])){
            $con=mysqli_connect($server, $username, $password, $bd) or
            die("Problemas con la conexión");

  $registro = $con->query("select titulo_libro from libros where id_libro='$_REQUEST[codigo]'") or
    die("Problemas en el select:".mysqli_error($con));

  if ($reg = $registro->fetch_array()) {
    ?>
    <form method="post" action="update.php">
      Datos del Libro a Modificar:
	  <br><br>
	  Titulo
      <input type="text" name="titulo" size="50" value="">
	  <br><br>
      <input type="submit" value="Confirmar">
    </form>
  <?php
  } else
    echo 'Registro no encontrado';
	}
  ?>
</body>

</html>