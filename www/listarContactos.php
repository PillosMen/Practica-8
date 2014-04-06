<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table border=1>';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>CLAVE</th>';
                echo '<th>PRODUCTO</th>';
                echo '<th>DESCRIPCION</th>';
                echo '<th>PRECIO</th>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['id']. '</td>';
                    echo '<td>'.$contacto['clave'].'</td>';
                    echo '<td>'.$contacto['nombre'].'</td>';
                    echo '<td>'.$contacto['descripcion'].'</td>';
                    echo '<td>'.$contacto['precio'].'</td>';
                echo '</tr>';
            }
        echo "</table>";
    }
}

?>
