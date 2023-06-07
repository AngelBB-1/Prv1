<?php 
$host = "localhost"; 
$database = "bdexamen"; 
$user = "Angel"; 
$password = "123";
$conexion = mysqli_connect($host, $user, $password,$database);

if (!$conexion) 
  die("No ha podido realizarse la conexión".mysqli_connect_error());
else
  echo "Conexion correcta";
  
//mysqli_close($conexion); //cierra la BBDD
?>
