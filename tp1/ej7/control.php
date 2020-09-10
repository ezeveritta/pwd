<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 10/09/2020
 * Descripción: Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:
 */

 // CONTROLADOR

 if($_GET)
 {
     switch($_GET["operacion"])
     {
        case "suma":
           $respuesta = (int)$_GET["num1"] + (int)$_GET["num2"];
           break;
        case "resta":
            $respuesta = (int)$_GET["num1"] - (int)$_GET["num2"];
            break;
        case "multiplicacion":
            $respuesta = (int)$_GET["num1"] * (int)$_GET["num2"];
            break;
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(respuesta) </title>
</head>
<body>
    <?php
    echo $respuesta;
    ?>
</body>
</html>