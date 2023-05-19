<!DOCTYPE HTML>
<html>
<head>
<title>exercici 2 pagina 2.php </title>
</head>
<body>
<?php 
if(empty($_FILES["fitxer"]["name"])) {
    echo "No hi ha cap fitxer";
} else {
    echo "Nom del fitxer: " . $_FILES["fitxer"]["name"];  
    $n = move_uploaded_file($_FILES["fitxer"]["tmp_name"], "penjat/ficheropenjat.txt");
    if($n) {
        echo "<br>Fichero guardado";	
        echo "<br><br>Contenido del fichero:<br>"; 
        $fich = fopen("penjat/ficheropenjat.txt","r");
        while(!feof($fich)) {
            $car = fgetc($fich);
            echo $car;	
        }
        fclose($fich);	
    } else {
        echo "<br>Error";
    }
}
?>
</body>
</html>

