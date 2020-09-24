<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo 
 *              esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su contenido en un textarea.
 */

 class ej2Control
 {
    private $archivo;
    private $direccion;
    private $descripcion;
    private $error;

    public function validar()
    {
        $operacion = false;
        $archivo = $this->get_archivo();

        if ($archivo["error"] <= 0) 
        {
            // Verificamos las consignas
            if ($archivo["type"] == 'text/plain')
            {
                $operacion = true;
            }
            else
            {
                $this->set_error("ERROR: El archivo no es TXT.");
            }
        }
        else
        {
            $this->set_error("ERROR: Se produjo un error.");
        }
        return $operacion;
    }


    public function subir()
    {
        $archivo = $this->get_archivo();
        $operacion = false;
        $direccion = 'archivos/' . $archivo['name'];

        // Intentamos copiar el archivo al servidor.
        if (!copy($archivo['tmp_name'], $direccion))
        {
            $this->set_error("ERROR: no se pudo cargar el archivo");
        } else
        {
            $operacion = true;
            $this->set_direccion($direccion);
            $this->set_descripcion(file_get_contents("archivos/".$archivo["name"]));
        }

        return $operacion;
    }

    
    public function set_archivo($data)
    {
        $this->archivo = $data;
    }
    public function get_archivo()
    {
        return $this->archivo;
    }
    public function set_direccion($data)
    {
        $this->direccion = $data;
    }
    public function get_direccion()
    {
        return $this->direccion;
    }
    public function set_descripcion($data)
    {
        $this->descripcion = $data;
    }
    public function get_descripcion()
    {
        return $this->descripcion;
    }
    public function set_error($data)
    {
        $this->error = $data;
    }
    public function get_error()
    {
        return $this->error;
    }
 }
?>