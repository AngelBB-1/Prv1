<?php
include_once('connexBD.php');
//error_reporting(E_ALL ^ E_NOTICE);
if (isset($_POST['enviat'])) 
  $sele=$_POST['enviat'];
  if ($sele == "1") {
    $dni = $_POST['dni'];

    // Eliminar mascotas de la persona
    $sql_mascotas = "DELETE FROM mascota WHERE idpersona = '$dni'";
    mysqli_query($conexion, $sql_mascotas);

    // Eliminar persona
    $sql_persona = "DELETE FROM persona WHERE dni = '$dni'";
    mysqli_query($conexion, $sql_persona);
}
else $sele="0";
?>
<!DOCTYPE html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Borrar persona</title></head>
<body>
<h1>Eliminar Persones</h1>
<?php
if ($sele=="0") 
{	
$sql="SELECT * FROM persona;";
$resultado = mysqli_query($conexion, $sql);
$numderows = mysqli_num_rows($resultado);

if ($numderows > 0) {
  while($row = mysqli_fetch_assoc($resultado)) {
?>

<form action="borrar.php" method="post" name="formu">
<table border="1">
<tr>
<td>dni: </td><td><h4><?php echo $row["dni"]?></h4></td>
<td>nombre:</td><td><h4><?php echo $row["nom"]?></h4></td>
<?php 
if ($row["casat"]==1) $casat="Sí";
else $casat="No";
?>
<td>casat/ada:</td><td><h4><?php echo $casat;?></h4></td>
<td><input name="Enviar" type="submit" value="borrar" /></td>
</tr>
</table>
<input name="dni" type="hidden" value="<?php echo $row['dni']; ?>" />
<input name="enviat" type="hidden" value="1" />
</form>
<?php 

  }
  echo "<h3>numero de filas-> ".$numderows."</h3>";
} 
else 
{
  echo "<h3>0 filas</h3>";
  echo "<h3><a href='index.php'>INDEX</a></h3>";	
}
	
} 
else 
{
$sql= "SELECT * FROM persona";
$resultado = mysqli_query($conexion, $sql);

echo "<br>".$sql."<br>";
echo "<br>LLISTAT<br>";
while ($row = mysqli_fetch_assoc($resultado)) {
  echo "DNI: " . $row['dni'] . ", Nombre: " . $row['nom'] . "<br>";
}
echo "<h1><a href='consultar.php'>consultar</a></h1>";
}

?>
</body>
</html>
