<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nombre</th>';
                echo '<th>Telefono</th>';
                echo '<th>Domicilio</th>';
                echo '<th>Correo</th>';
                echo '<th>Incidencia</th>';
                echo '<th>Fecha</th>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['Id']. '</td>';
                    echo '<td>'.$contacto['Nombre'].'</td>';
                    echo '<td>'.$contacto['Telefono'].'</td>';
                    echo '<td>'.$contacto['Domicilio'].'</td>';
                    echo '<td>'.$contacto['Correo'].'</td>';
                    echo '<td>'.$contacto['Incidencia'].'</td>';
                    echo '<td>'.$contacto['Fecha'].'</td>';
                echo '</tr>';
            }
        echo '<table>';
    }
    public function generaTablaEditar()
    {
        echo '<table>';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nombre</th>';
                echo '<th>Apellido Paterno</th>';
                echo '<th>Apellido Materno</th>';
                echo '<th>Telefono</th>';
                echo '<th>Opciones</th>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['Id']. '</td>';
                    echo '<td>'.$contacto['Nombre'].'</td>';
                    echo '<td>'.$contacto['Apellido_P'].'</td>';
                    echo '<td>'.$contacto['Apellido_M'].'</td>';
                    echo '<td>'.$contacto['Telefono'].'</td>';
                echo '</tr>';
            }
        echo '<table>';
    }
}
?>