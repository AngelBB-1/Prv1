<?php
include_once('conexBD.php');

if (isset($_POST['enviat'])) {
    $sele = $_POST['enviat'];
    
    if ($sele == "1") {
        $dni = $_POST['dni'];
        $nom = $_POST['nom'];
        $casat = isset($_POST['casat']) ? 1 : 0;
        
        // Insertar registro en la tabla persona
        $sql = "INSERT INTO persona (dni, nom, casat) VALUES ('$dni', '$nom', $casat);";
        mysqli_query($conexion, $sql);
    }
} else {
    $sele = "0";
}
?>

<!DOCTYPE html>
<head>
    <title>Insertar Persones amb les seues mascotes</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
    <h1>Insertar Persones</h1>
    
    <?php
    if ($sele == "0") {
    ?>
    
    <form action="insertar.php" method="post" name="formu">
        <table border="1">
            <tr>
                <td>dni: </td>
                <td><input name="dni" type="text" value="" minlength="9" maxlength="9" required/></td>
            </tr>
            <tr>
                <td>nombre: </td>
                <td><input name="nom" type="text" value="" required/></td>
            </tr>
            <tr>
                <td>casat/ada:</td>
                <td><input name="casat" type="checkbox" value="" /></td>
            </tr>
        </table>
        <input name="enviat" type="hidden" value="1" />
        <input name="Enviar" type="submit" value="inserir" />
        <input name="Enviar" type="reset" value="reset" />
    </form>
    
    <?php
    } else {
        echo "<br>Inserció realitzada amb èxit<br>";
        
        // Consulta de personas casadas
        $sql = "SELECT * FROM persona WHERE casat = 1;";
        $resultado = mysqli_query($conexion, $sql);
        
        echo "<br>LLISTAT de persones casades<br><br>";
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "DNI: " . $row['dni'] . "<br>";
            echo "Nom: " . $row['nom'] . "<br>";
            echo "Casat/ada: Sí<br>";
            echo "<hr>";
        }
        
        echo "<h1><a href='index.php'>Index</a></h1>";
    }
    
    mysqli_close($conexion);
    ?>
</body>
</html>
