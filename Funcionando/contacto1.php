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
	
</body>
</html>