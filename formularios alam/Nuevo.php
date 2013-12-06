<html>
<head>
</head>
<body>
<form action=Ver.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contacto.php');
		 $modelo = new Contacto();
         //$contactos = $modelo->encontrarTodos();
         $contactos = $modelo->obtenerUltimo();
foreach($contactos as $contacto){

echo "<fieldset>";
echo "<legend align='center'>Reportar Incidenca</legend>";
echo "<table>";
echo "<tr>Folio:" .$contacto['Id']. "</tr>";
echo "<tr>";
echo "<td>Nombre:</td>";
echo "<td><input type=text size=10 maxlength=50 name='txtNombre' /><td></tr>";
echo "<tr>";
echo "<td>Telefono:</td>";
echo "<td><input type=text size=10 maxlength=10 name='txtTelefono' /><td></tr>";
echo "<tr>";
echo "<td>Domicilio:</td>";
echo "<td><input type=text size=10 maxlength=50 name='txtDomicilio' /><td></tr>";
echo "<tr>";
echo "<td>Correo:</td>";
echo "<td><input type=text size=10 maxlength=50 name='txtCorreo' /><td></tr>";
echo "<tr>";
echo "<td>Incidencia:</td>";
echo "<td><input type=text size=10 maxlength=50 name='txtIncidencia' /><td></tr>";
echo "<tr>";
echo "<td><input type=submit name='Enviar' value='Guardar'/></td>";
echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
echo "</table>";
echo "</fieldset>";
}
?>
</body>
</html>