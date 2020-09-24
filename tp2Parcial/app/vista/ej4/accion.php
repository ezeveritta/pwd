<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
 *               esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
 *               persona es mayor de edad o no; (si la edad es mayor o igual a 18).
 *               Enviar los datos usando el método GET y luego probar de modificar los datos
 *               directamente en la url para ver los dos posibles mensajes.
 */

$Titulo = " Ejercicio 4 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej4Control.php");
$datos = data_submitted();
/*
$Control = new ej4Control();

if (count($datos) > 0)
{
    // Controlador
    $resultado = $Control->obtener_cadena($datos);
} else
{
    $resultado = "ERROR: no se obtuvieron datos.";
}
*/

?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12">
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
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
    </div>
</div>

<?php 

include_once("../estructura/pie.php");
?>