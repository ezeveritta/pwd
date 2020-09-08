<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 08/09/2020
 * Descripción: Crear una página php que contenga un formulario HTML como el que se indica en la
                imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                Cambiar el método Post por Get y analizar las diferencias.
 */

 // CONTROLADOR

 if($_GET)
 {
     $respuesta = "Hola, yo soy " . $_GET["nombre"] . ", " . $_GET["apellido"] . " tengo " . $_GET["edad"] . " años y vivo en " . $_GET["direccion"];
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