<?php
session_start();
if(!isset($_SESSION['txtNombre'])){
    header("Location: inicio.php");
}
?>
<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="UTF-8">
        <title>Calidad Cutonalá</title>
        <link rel="stylesheet" href="estiloinicio.css"/>
    
  <link rel="shortcut icon" href="iconUdeG.png" />
    </head>
    <body>
    
     <table id="cabes">
     <tr>
     
    
<?php

echo "<label id='lblBienvenido'>¡Bienvenido  </label>   <label id='lblmaestro'>Maestro   " .$_SESSION['txtNombre']."!  </label>";

?>
        <td><a href="index1.php" title="Ir a Universidad De Guadalajara"><img id="user" src="usuario.png" alt="GIF" >
        <a href ="cerrarsesion.php"><img id='cerrarsesion' title='Salir del Sistema' src='cerrarsesion.png'>
</a></a>
   </td>
      </tr>
</table>
<div id="header"> 

       
        <table>
        <tr>

         <td><a href="ofertaacademoca.php"><img src="listas.png" id="facebook" title="Listas de Alumnos"></a></td>
        <td><a  href="registro.php"><img src="calendario.png" id="facebook" title="Calendario escolar"></a></td>
         <td><a  href="contacto.php"><img src="propiedades.png" id="facebook" title="Incidencias y Problemas de CUTONALÁ"></a></td>
     
         <td><a href="contacto1.php">INCIDENTES</a></td>
        </tr>
        </table>
        </table>

        </div>




<div class ="aside">
<fieldset>NO HAY EVENTOS POR EL MOMENTO</fieldset>
</div>


   <div id="footer">
   
       
   </div>

        <div id="footer_firm"> 
        <div id="block-udg-block-1" class="block block-block region-odd odd region-count-1 count-11">
        <div class="block-inner">
   
            <div class="content">
            <fieldset id="abajo">
            <a href="http://www.cutonala.udg.mx"><img src="Logo_CUTonala.png" id="logoCutonala"></a>
            <p id="sede">Sede Provisional Casa de la Cultura - Administraci&oacute;n: Morelos #180, Zona Centro, C.P. 45400, Tonal&aacute;, Jalisco, M&eacute;xico. <br>
            <strong>Tel&eacute;fono: +52 (33) 35403020 Ext. 64007.<br>
            </strong>
            </p>
            <p id="sedeSantaPaula">Sede Santa Paula: +52 (33) 15923916</p>
            <p id="sedeSillitas">Sede La Sillita: +52 (33) 15927841</p>
</fieldset>
              
      
           </div>
         </div>
       </div>
<!-- /block-inner, /block -->
 </div>
