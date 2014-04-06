<?php
require_once('contacto.php');
require_once('listarContactos.php');
require_once('22.html');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
    <body>
        <h1>Mostrar los Productos</h1>

        <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
        <?php
        /*
            $modelo->nuevo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
        <?php
            $modelo->editarUltimo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();vb c 
        ?>
        <h1>Eliminar el &uacute;ltimo elemento y mostrar los elementos</h1>
        <?php
            $modelo->eliminarUltimo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        */
        ?>
    </body>
</html>

