<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 10/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos
                directamente en la url para ver los dos posibles mensajes.
 */

 // CONTROLADOR

 if($_GET)
 {
     $respuestaEdad = ($_GET["edad"] >= 18) ? "Soy mayor de edad" : "soy menor de edad";

     $respuesta = "Hola, yo soy " . $_GET["nombre"] . ", " . $_GET["apellido"] . ". " . $respuestaEdad . " y vivo en " . $_GET["direccion"];
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