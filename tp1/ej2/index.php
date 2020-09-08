<?php

/* Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 07/09/2020
 * Descripción: Crear una página php que contenga un formulario HTML que permita ingresar las horas
                de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                Enviar los datos del formulario por el método Get a otra página php que los reciba y
                complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                se cursan por semana.
 */

?>

<html>
    <header>
        <title>PWD TP1 - EJ1</title>
    </header>
    <body>
        <form method="get" action="control.php">
            <h1 text-align="center">Horas de clase diaria</h1>

            <label for="lunes" aling="center">Lunes: </label><br>
            <input type="number" id="lunes" name="lunes">
            <br>

            <label for="martes">Martes: </label><br>
            <input type="number" id="martes" name="martes">
            <br>

            <label for="miercoles">Miercoles: </label><br>
            <input type="number" id="miercoles" name="miercoles">
            <br>

            <label for="jueves">Jueves: </label><br>
            <input type="number" id="jueves" name="jueves">
            <br>

            <label for="viernes">Viernes: </label><br>
            <input type="number" id="viernes" name="viernes">
            <br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>