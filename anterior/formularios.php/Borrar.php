<form action=Formulario.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
$Id=$_GET['var1'];
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "DELETE FROM incidencias WHERE Id=$Id";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
        }
        catch(Exception $e)
        {
            echo $e;
        }
           echo "Datos Borrados con exito";
           echo "<br>";
           echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
?>