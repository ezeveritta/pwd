<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 10/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
 */

 // CONTROLADOR

 if($_GET)
 {
     $respuestaEdad = ($_GET["edad"] >= 18) ? "Soy mayor de edad" : "soy menor de edad";

     $respuesta = "Hola, yo soy <b>" . $_GET["nombre"] . "</b>, <b>" . $_GET["apellido"] . "</b>. " . $respuestaEdad . ", vivo en " . $_GET["direccion"]
                . " y soy " . $_GET["genero"] . ".<br>- Estudios: <i>" . $_GET["educacion"] . "</i>";
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