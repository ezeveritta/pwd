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

 // CONTROLADOR

 if($_GET)
 {
    $lunes = $_GET["lunes"];
    $martes = $_GET["martes"];
    $miercoles = $_GET["miercoles"];
    $jueves = $_GET["jueves"];
    $viernes = $_GET["viernes"];
    
    $suma = array($lunes, $martes, $miercoles, $jueves, $viernes);
    $resultado = 0;
    
    foreach ($suma as $horas)
    {
        if (is_numeric($horas))
            $resultado += $horas;
    }

    $resultado = "La cantidad de horas semanales es: " . $resultado;
 }
 else
 {
     
    $resultado = "ERROR: No se obtuvo un valor correctamente.";
 }

?>

<html>
    <header>
        <title>(resultado) PWD TP1 - EJ2</title>
    </header>
    <body>
        <h1>Resultado</h1>
        <p>
        <?php
            echo $resultado;
        ?>
        </p>
        <a href="index.php">Regresar</a>
    </body>
</html>