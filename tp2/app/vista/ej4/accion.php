<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 */


$Titulo = " Ejercicio 4"; 
include_once("../estructura/cabecera.php");

$datos = data_submitted();
/**Y la Salida debe ser: */

?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
        <h2 class="text-primary">La Película introducida es:</h2>

        <p><b>Titulo:</b> <?php echo $datos["titulo"] ?></p>
        <p><b>Actores:</b> <?php echo $datos["actores"] ?></p>
        <p><b>Director:</b> <?php echo $datos["director"] ?></p>
        <p><b>Guión:</b> <?php echo $datos["guion"] ?></p>
        <p><b>Producción:</b> <?php echo $datos["produccion"] ?></p>
        <p><b>Año:</b> <?php echo $datos["anio"] ?></p>
        <p><b>Nacionalidad:</b> <?php echo $datos["nacionalidad"] ?></p>
        <p><b>Género:</b> <?php echo $datos["genero"] ?></p>
        <p><b>Duración:</b> <?php echo $datos["duracion"] ?></p>
        <p><b>Restricciones de edad:</b> <?php echo $datos["restriccion"] ?></p>
        
    </div>

</div>