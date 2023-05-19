<?php

if ((isset($_GET["alt"])) && (isset($_GET["pes"]))) {
    
    $altura = ($_GET['alt']);
    $peso = ($_GET['pes']);
    $imc= $peso / ($altura^2);

    if ($imc < 18.5){
        echo "Bajo peso";
    } elseif ($imc >18.5 && $imc <24.9) {
        echo "Bajo normal";
    } elseif ($imc >25 && $imc <29.9) {
        echo "Sobrepeso";
    } else {
        echo "Obesidad";
    }



} else {

    echo '<a href="http://localhost/examen/Exercici3/ex3pag1.php">Inci</a>'
}

?>

