<html>
<head>
 <title>Error Sesion</title>
        <link rel="stylesheet" href="estiloinicio.css"/>
</head>
<body>
<?php
session_start();
$Nombre=$_POST['txtNombre'];
$Pass=$_POST['password'];
$_SESSION['txtNombre']=$_POST['txtNombre'];
if($Nombre=='Samir' && $Pass=='udg'){
	header('Location: index.php');
}else if($Nombre=='Vladimir' && $Pass=='udg'){
header('Location: index1.php');
}else{

	
echo "<h1 id='error'>Error en usuario y/o Contrase&ntilde;a</h1>";
echo "<br><h3 id='redireccionando'>Redireccionando a p&aacute;gina principal en . . . <br>   3 segundos</h3>";
header('refresh:3; url=inicio.php');
}
?>
</body>
</html>