<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 13/09/2020
 * Descripción: Investigue y pruebe la validación de formularios usando alguna librería o framework
                javaScript (JQuery, Mootools, Dojo, Prototype, etc).
 */

 class ej1Control
 {
    private $archivo;
    private $direccion;

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


    public function validar()
    {
        $operacion = false;
        $archivo = $this->get_archivo();

        if ($archivo["error"] <= 0) 
        {
            // Verificamos las consignas
            if (( ((int) $archivo["size"] / 1024 ) / 1024) <= 2) 
            {
                if ($archivo["type"] == 'application/pdf' || $archivo["type"] == 'application/doc')
                {
                    $operacion = true;
                }
                else
                {
                    $operacion = "ERROR: El archivo no es PDF o DOC.";
                }
            } else 
            {
                $operacion = "ERROR: El archivo debe pesar menos de 2MB";
            }
        }
        else
        {
            $operacion = "Se produjo un error.";
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
            $operacion = "ERROR: no se pudo cargar el archivo";
        } else
        {
            $operacion = true;
            $this->set_direccion($direccion);
        }

        return $operacion;
    }
 }
?>