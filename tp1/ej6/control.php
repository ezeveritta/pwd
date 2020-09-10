<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 10/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                que procesa el formulario la cantidad de deportes que practica.

 */

 // CONTROLADOR

 if($_GET)
 {
    $respuestaEdad = ($_GET["edad"] >= 18) ? "Soy mayor de edad" : "soy menor de edad";

    $cantDeportes = 0;
    if (isset($_GET["futbol"]))
        if ($_GET["futbol"])
            $cantDeportes++;
    if (isset($_GET["basket"]))
        $cantDeportes++;
    if (isset($_GET["tennis"]))
        $cantDeportes++;
    if (isset($_GET["voley"]))
        $cantDeportes++;

    $respuesta = "Hola, yo soy <b>" . $_GET["nombre"] . "</b>, <b>" . $_GET["apellido"] . "</b>. " . $respuestaEdad . ", vivo en " . $_GET["direccion"]
               . " y soy " . $_GET["genero"] . ".<br>- Estudios: <i>" . $_GET["educacion"] . "</i>"
               . "<br>- Deportes: " . $cantDeportes;
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