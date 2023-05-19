

<!DOCTYPE HTML>
<html>
<head>
<title>exercici 4 pagina 1.php </title>
</head>
<body>
    <form action="ex4pag1.php" method="post">
    <table width="80">
        <tr>
            <td>Login:</td>
            <td><input name="login" type="text" size="20" maxlength="30" /></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input name="password" type="text" size="20" maxlength="30" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input name="Enviar" type="submit" value="Enviar" />
            <input name="Borrar" type="reset" value="Borrar" /></td>
        </tr>
    </form>
</body>
</html>


<?php
/*
session_start();
$_SESSION['login']='angel';
$_SESSION['login']=$_POST['angel'];

$_SESSION['password']='123';
$_SESSION['password']=$_POST['123'];
*/
?>
