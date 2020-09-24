<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
 *              deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
 *              que procesa el formulario la cantidad de deportes que practica.
 */

 class ej6Control
 {
    public function obtener_cadena($datos)
    {
        $resultado = "ERROR: Uno o más valores son incorrectos.";

        if(count($datos) >= 4)
        {
            $valor = "menor";
            if ($datos["edad"] >= 18)
                $valor = "mayor";

            $deportes = 0;
            if (isset($datos["futbol"]))
                $deportes++;
            if (isset($datos["voley"]))
                $deportes++;
            if (isset($datos["basket"]))
                $deportes++;
            if (isset($datos["tennis"]))
                $deportes++;

            $resultado = "Hola, mi nombre es " . $datos["nombre"] . ", " . $datos["apellido"] 
                       . " y soy ". $datos["genero"] .", vivo en " . $datos["direccion"] 
                       . " y soy " . $valor . " de edad con " . $datos["edad"] . " años."
                       . "<br>Estudios: " . $datos["educacion"] . "."
                       . " Cantidad de deportes: <b>" . $deportes . "</b>.";

        }

        return $resultado;
    }
 }
?>