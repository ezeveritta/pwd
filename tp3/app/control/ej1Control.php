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
    public function validar($datos){
        $inp1 = $datos['inp1'];
        $inp2 = $datos['inp2'];

        if ($inp1 == $inp2)
        {
            $respuesta = "Son iguales";
        }
        else
        {
            $respuesta = "No son iguales";
        }

        return $respuesta;

    }
 }
?>