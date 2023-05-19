<!DOCTYPE HTML>
<html>
<head>
<title>exercici 1 pagina 2.php </title>
</head>
<body>
    <?php
    $nombre = $_GET["nom"];
    $apellido = $_GET["cognom"];

    $nombreM = ucfirst($nombre);
    $apellidoM = ucfirst($apellido);

    $hora = date('H');

    if ($hora >= 0 && $hora < 12) {
        echo "Hola " . $nombreM . " " . $apellidoM . ", bon dia";
    } else {
        echo "Hola " . $nombreM . " " . $apellidoM . ", bona tarda";
    }
    ?>
</body>
</html>
