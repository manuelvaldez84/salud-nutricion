<html>
      <head>
         <title>Elimina</title>
      </head>
      <body>
         <?php
        include ('conexion.php');
            $con=mysqli_connect($server, $username, $password, $bd) or
            die("Problemas con la conexión");
            
            $registros=mysqli_query($con,"delete from libros where id_libro = $_REQUEST[codigo] ") or
            die("Problemas en el select:".mysqli_error($con));
            
            while ($reg=mysqli_fetch_array($registros))
            {
            echo "Codigo:".$reg['id_libro']."<br>";
            echo "Nombre:".$reg['titulo_libro']."<br>";
            
            }
            echo "<br>";
            echo "<hr>";
            
            mysqli_close($con);
            
            echo "Registro  Eliminado ";
            ?>
      </body>
   </html>
