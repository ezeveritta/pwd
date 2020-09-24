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
    public function contar($datos)
    {
        $resultado = 0;

        if (isset($datos["lunes"]))
            $resultado += (int) $datos["lunes"];

        if (isset($datos["martes"]))
            $resultado += (int) $datos["martes"];

        if (isset($datos["miercoles"]))
            $resultado += (int) $datos["miercoles"];

        if (isset($datos["jueves"]))
            $resultado += (int) $datos["jueves"];

        if (isset($datos["viernes"]))
            $resultado += (int) $datos["viernes"];


        return $resultado;
    }
 }
?>