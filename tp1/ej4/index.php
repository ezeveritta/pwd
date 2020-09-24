<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 10/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
 *               esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
 *               persona es mayor de edad o no; (si la edad es mayor o igual a 18).
 *               Enviar los datos usando el método GET y luego probar de modificar los datos
 *               directamente en la url para ver los dos posibles mensajes.
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