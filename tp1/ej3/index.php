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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 - EJ1 - index</title>
</head>
<body>
    <form action="control.php" method="get">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellido">Apellido: </label>
        <input type="text" id="apellido" name="apellido"><br>

        <label for="edad">Edad: </label>
        <input type="number" id="edad" name="edad"><br>

        <label for="direccion">Dirección: </label>
        <input type="text" id="direccion" name="direccion"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>