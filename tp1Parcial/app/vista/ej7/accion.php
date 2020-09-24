<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear una página con un formulario que contenga dos input de tipo text y un select. En
 *               los inputs se ingresarán números y el select debe dar la opción de una operación
 *               matemática que podrá resolverse usando los números ingresados. En la página que
 *               procesa la información se debe mostrar por pantalla la operación seleccionada, cada
 *               uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
 *               formulario:
 */

$Titulo = " Ejercicio 7 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej7Control.php");
$datos = data_submitted();
$Control = new ej7Control();

if (count($datos) > 0)
{
    // Controlador
    $resultado = $Control->calcular($datos);
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