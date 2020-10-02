<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear una página con un formulario que contenga dos input de tipo text y un select. En
 *               los inputs se ingresarán números y el select debe dar la opción de una operación
 *               matemática que podrá resolverse usando los números ingresados. En la página que
 *               procesa la información se debe mostrar por pantalla la operación seleccionada, cada
 *               uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
 *               formulario:
 */

 class ej7Control
 {
    public function calcular($datos)
    {
        $resultado = "ERROR: Uno o más valores son incorrectos.";

        if(count($datos) >= 3)
        {
            switch ($datos["operacion"])
            {
                case "+":
                    $resultado = $datos["valorA"] + $datos["valorB"];
                    break;
                case "-":
                    $resultado = $datos["valorA"] - $datos["valorB"];
                    break;
                case "*":
                    $resultado = $datos["valorA"] * $datos["valorB"];
                    break;
                case "/":
                    $resultado = $datos["valorA"] / $datos["valorB"];
                    break;
                default:
                    $resultado = "Error: Operando incorrecto.";
                    break;
            }
        }

        return $resultado;
    }
 }
?>