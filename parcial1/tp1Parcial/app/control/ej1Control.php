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
    public function verificar($numero)
    {
        $resultado = "ERROR: Valor invalido";

        if ($numero > 0) 
        {
            $resultado = "El valor es Positivo!";
        }
        elseif ($numero < 0)
        {
            $resultado = "El valor es Negativo!";
        }
        else
        {
            $resultado = "El valor es Cero!";
        }
        return $resultado;
    }
    
 }
?>