<?php
require_once('conexion.php');
require_once('Contactos.php');
require_once('Contacto.php');
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>ENVIA UN CORREO</title>
	<link rel="stylesheet" href="estilocontacto.css"/>
</head>
<body>
<?php
          
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
			echo "<input type='text' name='Folio' value='asdfads' maxlength=5 size=20>";

?>
	<fieldset>
		<legend align="center">ENVIA UN CORREO</legend>
		<form name="frmContacto" method="post" action="sendbymail.php">
<table id="tabla" width="500px">
<tr>
<td>
<label for="first_name">Nombre: *</label>
</td>
<td>
<input type="text" name="first_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td valign="top">
<label for="last_name">Apellido: *</label>
</td>
<td>
<input type="text" name="last_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td>
<label for="email">Dirección de E-mail: *</label>
</td>
<td>
<input type="text" name="email" maxlength="80" size="35">
</td>
</tr>
<tr>
<td>
<label for="telephone">Número de teléfono:</label>
</td>
<td>
<input type="text" name="telephone" maxlength="25" size="15">
</td>
</tr>
<tr>
<td>
<label for="comments">Reporte de incidente: *</label>
</td>
<td>
<textarea name="comments" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:right">
<input type="submit" value="REPORTAR FALLA">
</td>
</tr>
</table>
</form>
<a href="inicio.php">Regresar</a>
	</fieldset>
	<fieldset>
	<legend>TELEFONOS</legend>
	LOCAL 3314322445
	LADA SIN COSTO 01 800 3232 32 3232

	</fieldset>

</body>
</html>