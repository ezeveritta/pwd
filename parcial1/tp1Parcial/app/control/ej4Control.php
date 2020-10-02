<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo 
 *              esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su contenido en un textarea.
 */

 class ej4Control
 {
    public function obtener_cadena($datos)
    {
        $resultado = "ERROR: Uno o más valores son incorrectos.";

        if(count($datos) >= 4)
        {
            $valor = "menor";
            if ($datos["edad"] >= 18)
                $valor = "mayor";

            $resultado = "Hola, yo soy " . $datos["nombre"] . ", " . $datos["apellido"] .", vivo en " . $datos["direccion"] . " y soy <b>" . $valor . "</b> de edad con " . $datos["edad"] . " años.";
        }

        return $resultado;
    }
 }
?>