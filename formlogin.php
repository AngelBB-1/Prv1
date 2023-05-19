<!DOCTYPE HTML>
<html>
<head>
<title>formlogin.php</title>
</head>
<body>
<form action="logar.php" method="post" enctype="multipart/form-data">
<table width="80">
<tr>
<td>Usuari:</td>
<td><input name="Usuari" type="text" size="20" maxlength="30" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="password" type="password" size="20" maxlength="30" /></td>
</tr>
<tr>
<td>Color:</td>
<td>
<select name="color">
  <option value="">Selecciona un color...</option>
  <option value="vermell">Vermell</option>
  <option value="blau">Blau</option>
  <option value="verd">Verd</option>
  <option value="negre">Negre</option>
</select>
</td>
</tr>
<tr>
<td>Fitxer:</td>
<td><input name="fitxer" type="file" size="20" maxlength="30" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="Enviar" type="submit" value="Enviar" /><input name="Borrar" type="reset" value="Borrar" /></td>
</tr>
</form>
</body>
</html>


