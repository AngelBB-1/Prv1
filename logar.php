<!DOCTYPE HTML>
<html>
<head>
<title>logar.php</title>
</head>
<body>
<h1>logar</h1>
<?php
if (isset($_POST['Usuari']) && isset($_POST['password'])) {
    $usuari = ucfirst(strtolower($_POST['Usuari']));
    $password = $_POST['password'];

    if (empty($usuari) || empty($password)) {
        echo "Error: Falta introduir l'usuari i/o la contrasenya.";
    } else {
        echo "Usuari: " . $usuari . "<br />";
        echo "Contrasenya: " . $password . "<br />";
        
        if (isset($_POST['color'])) {
            $color = $_POST['color'];
            
            switch ($color) {
                case 'vermell':
                    echo "Fa calor";
                    break;
                case 'blau':
                    echo "Fa fred";
                    break;
                case 'verd':
                    echo "Què bonics els arbres";
                    break;
                case 'negre':
                    echo "Pensa en positiu";
                    break;
                default:
                    echo "No has triat res";
                    break;
            }
        } else {
            echo "No has triat res";
        }
    }
} else {
    echo "Error: Falta introduir l'usuari i/o la contrasenya.";
}

if (isset($_FILES['fitxer'])) {
    $file = $_FILES['fitxer'];
    
    if ($file['error'] === UPLOAD_ERR_OK) {
        $fileContent = file_get_contents($file['tmp_name']);
        
        echo "<br /><br />Contingut del fitxer:<br />";
        echo $fileContent;
    } else {
        echo "Error al carregar el fitxer.";
    }
}
?>
</body>
</html>


