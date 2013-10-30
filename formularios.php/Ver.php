<form action=Formulario.php method="POST">
<?php
session_start();
require_once('Conexion.php');
require_once('Contactos.php');
$Nombre = $_POST['txtNombre'];
$Telefono = $_POST['txtTelefono'];
$Domicilio=$_POST['txtDomicilio'];
$Correo=$_POST['txtCorreo'];
$Incidencia=$_POST['txtIncidencia'];
		try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT Id FROM incidencias WHERE Nombre='$Nombre' AND Correo='$Correo' AND Incidencia='$Incidencia'";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $resultado[] = $row;
                     }
                }
            }
            $conexion->cerrar();
        }
        catch(Exception $e)
        {
            return array();
        }

$Existe = count($resultado);
if($Existe>0){
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            echo "Este incidencia ya se encuentra en nuestra base de datos se registrara como Error para su pronta solucion";
            echo "<br>";
            $sql = "INSERT INTO ErroresConocidos (Error, Nombre, Comentarios, Solucion, Fecha) VALUES ('$Incidencia','$Nombre','Error no solucionado','0',NOW())";
         	$resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
        }
        catch(Exception $e)
        {
        	echo $e;
        }
    }
    else
    {
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }

            $sql = "INSERT INTO incidencias (Error, Nombre, Telefono, Domicilio, Correo, Incidencia, Fecha)"."VALUES". "('$Nombre','$Telefono','$Domicilio','$Correo','$Incidencia',NOW())";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }
           echo "Datos Ingresados con exito";
           echo "<br>";
           echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
?>