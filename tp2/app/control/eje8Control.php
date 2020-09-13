<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 11/09/2020
 * Descripción: La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                Agregar un botón para limpiar el formulario y volver a consultar.

 */

 class eje8Control
 {
    public function obtenerPrecio($datos){
        $edad = $datos['edad'];
        $est = isset($datos['estudiante']);

        $precio = 300;
        if ($est || $edad < 12)
        {
            $precio = 160;
        }
        elseif ($est && $edad >= 12)
        {
            $precio = 180;
        }

        return $precio;

    }
 }
?>