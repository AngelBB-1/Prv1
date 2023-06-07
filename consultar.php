<?php include_once('conexBD.php'); ?>
<!DOCTYPE html>
<head>
    <title>Consultar Persones amb les seues mascotes</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
    <h1>Consultar Persones amb les seues mascotes</h1>
    <?php
    $sql = "SELECT persona.nom, mascota.nommascota, mascota.tipusmascota FROM persona LEFT JOIN mascota ON persona.dni = mascota.idpersona;";

    $resultado = mysqli_query($conexion, $sql);

    $numderows = mysqli_num_rows($resultado);

    if ($numderows > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<p>Nombre: " . $row['nom'] . " ";
            if ($row['nommascota'] && $row['tipusmascota']) {
                echo "nommascota: " . $row['nommascota'] . " ";
                echo "tipusmascota: " . $row['tipusmascota'];
            } else {
                echo "no tiene mascotas";
            }
            echo "</p>";
            echo "<hr>";
        }
        echo "<h3>Número de filas: " . $numderows . "</h3>";
    } else {
        echo "<h3>0 filas</h3>";
    }

    mysqli_close($conexion);
    ?>
    <h3><a href="index.php">INDEX</a></h3>	
</body>
</html>
