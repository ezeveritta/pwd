<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 21/10/2020
 * Descripcion:  Crear la capa de control, que nos permitan acceder al ORM (Modelo de datos) y entregarle la
 *               informacion a las paginas de la interface. 
 */

class PersonaControl
{
    /**
     * Toma los datos para crear un objeto Persona e invocar su metodo Insertar en database
     * @param array $param los datos para cargar a la bd
     * @return boolean
     */
    public function Alta($param)
    {
        // Creamos el objeto modelo Persona
        $Persona = new Persona();
        // Definimos la información
        $Persona->cargar($param["nroDni"],$param["apellido"],$param["nombre"],$param["fechaNac"],$param["telefono"],$param["domicilio"]);
        
        // Insertamos y retornamos el resultado
        return ($Persona->insertar()) ? true : false;
    }
}