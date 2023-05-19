<?php
$nombre = $_GET["nom"];
$apellido = $_GET["cognom"];

$nombreM = ucfirst(strtolower($nombre));
$apellidoM = ucfirst(strtolower($apellido));

$hora = date('H');

if ($hora < 12) {
    echo "Hola " . $nombreM . " " . $apellidoM . ", bon dia.";
} else {
    echo "Hola " . $nombreM . " " . $apellidoM . ", bona tarda.";
}
?>
