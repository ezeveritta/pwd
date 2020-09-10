<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 10/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                que procesa el formulario la cantidad de deportes que practica.

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

        <input type="radio" name="educacion" id="educacion_1" value="No tiene estudios">
        <label for="educacion_1">No tiene estudios</label><br>

        <input type="radio" name="educacion" id="educacion_2" value="Estudios Primarios">
        <label for="educacion_2">Estudios primarios</label><br>

        <input type="radio" name="educacion" id="educacion_3" value="Estudios Secundarios">
        <label for="educacion_3">Estudios secundarios</label><br>

        <label for="genero">Seleccione su genero</label>
        <select name="genero" id="genero">
            <option value="femenino">Mujer</option>
            <option value="masculino">Hombre</option>
            <option value="otro">otro</option>
        </select><br>

        Deportes:<br>
        <input type="checkbox" name="futbol" id="futbol">
        <label for="futbol">Futbol</label>

        <input type="checkbox" name="basket" id="basket">
        <label for="basket">basket</label>

        <input type="checkbox" name="tennis" id="tennis">
        <label for="tennis">Tennis</label>

        <input type="checkbox" name="voley" id="voley">
        <label for="voley">Voley</label>

        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>