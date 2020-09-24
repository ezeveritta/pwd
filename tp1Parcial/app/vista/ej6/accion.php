<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
 *              deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
 *              que procesa el formulario la cantidad de deportes que practica.
 */

$Titulo = " Ejercicio 6 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej6Control.php");
$datos = data_submitted();
$Control = new ej6Control();

if (count($datos) > 0)
{
    // Controlador
    $resultado = $Control->obtener_cadena($datos);
} else
{
    $resultado = "ERROR: no se obtuvieron datos.";
}


?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 text-center">
            
                <div class="alert alert-info w-75 mx-auto mt-5" role="alert">
                    <h6>Resultado!</h6> <br>
                    <p><?php echo $resultado ?></b></p>
                </div>

        </div>
    </div>
</div>

<?php 

include_once("../estructura/pie.php");
?>