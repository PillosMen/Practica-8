<?php
            
require_once('conexion.php');



class Contacto
{

    public function encontrarTodos()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM productos";
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
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }

    public function nuevo()
    {
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
          

    $clave=$_POST["cla"];
     $nombre=$_POST["nom"];
      $descripcion=$_POST["des"];
       $precio=$_POST["pre"];

     $sql="INSERT INTO productos(clave,nombre,descripcion,precio) VALUES ('$clave','$nombre','$descripcion','$precio')";

        mysql_query($sql);

            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        } 
    }

    
    private function obtenerUltimo()
    {
        try
        {
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = 'SELECT * FROM productos ORDER BY id DESC LIMIT 1';
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0)
                {
                    $row = $result->fetch_assoc();
                    $resultado = $row; 
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        }
    }

    /*
    public function editarUltimo()
    {
        try
        {
            $ultimo = $this->obtenerUltimo();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "UPDATE `contacto` SET `observaciones`='editado el ".date('Y-m-d H:i:s')."', `modified_in`='".date('Y-m-d H:i:s')."' WHERE `id`='".$ultimo['id']."';";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public function eliminarUltimo()
    {
        try
        {
            $ultimo = $this->obtenerUltimo();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "DELETE FROM `contacto` WHERE `id`='".$ultimo['id']."';";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        }

    }
    */
}
 ?>
