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
$Control = new ej4Control();

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