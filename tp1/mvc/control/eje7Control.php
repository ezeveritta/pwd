<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 11/09/2020
 * Descripción: Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:

 */

 class eje7Control
 {
    public function calcular($datos){
        $num1 = $datos['num1'];
        $num2 = $datos['num2'];
        $operacion = $datos['operacion'];

        switch($operacion)
        {
            case "suma":
                $respuesta = (int)$num1 + (int)$num2;
                break;
            case "resta":
                $respuesta = (int)$num1 - (int)$num2;
                break;
            case "multiplicacion":
                $respuesta = (int)$num1 * (int)$num2;
                break;
            default:
                $respuesta = "Error: operación desconocida";
                break;
        }

        return $respuesta;

    }
 }
?>