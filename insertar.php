<?php
include_once('connexBD.php');
//error_reporting(E_ALL ^ E_NOTICE);
if (isset($_POST['enviat'])) 
{
    $sele=$_POST['enviat'];
    if ($sele == "1") {
        $dni = $_POST['dni'];
        $nom = $_POST['nom'];
        $casat = isset($_POST['casat']) ? 1 : 0;
    
        $sql = "INSERT INTO persona (dni, nom, casat) VALUES ('$dni', '$nom', $casat)";
        mysqli_query($conexion, $sql);
      }
}
else $sele="0";
?>
<!DOCTYPE html>
<head><title>Insertar Persones amb les seues mascotes</title><meta http-equiv="content-type" content="text/html;charset=utf-8" /></head>
<body>
<h1>Insertar Persones</h1>
<?php
if ($sele=="0") 
{	
?>
<form action="insertar.php" method="post" name="formu">
<table border="1">
<tr><td>dni: </td><td><input name="dni" type="text" value="" minlength=9 maxlength=9 required/></td></tr>
<tr><td>nombre: </td><td><input name="nom" type="text" value="" required/></td></tr>
<tr><td>casat/ada:</td><td><input name="casat" type="checkbox" value="" /></td></tr>
</table>
<input name="enviat" type="hidden" value="1" />
<input name="Enviar" type="submit" value="inserir" />
<input name="Enviar" type="reset" value="reset" />
</form>
<?php 
} 
else 
{

 $sql = "SELECT * FROM persona WHERE casat = 1";


echo "<br>".$sql."<br>";
$resultado = mysqli_query($conexion, $sql);

echo "<br>LLISTAT de persones casades<br>";
while ($row = mysqli_fetch_assoc($resultado)) {
    echo "Nom: " . $row['nom'] . "<br>";
  }

echo "<br>LLISTAT<br>";
echo "<h1><a href='consultar.php'>consultar</a></h1>";
}
mysqli_close($conexion);
?>
</body>
</html>
