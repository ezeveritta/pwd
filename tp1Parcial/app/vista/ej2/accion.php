<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear una página php que contenga un formulario HTML que permita ingresar las horas
 *               de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
 *               Enviar los datos del formulario por el método Get a otra página php que los reciba y
 *               complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
 *               se cursan por semana.
 */

$Titulo = " Ejercicio 2 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej2Control.php");
$datos = data_submitted();
$Control = new ej2Control();

if (count($datos) > 0)
{
    // Controlador
    $resultado = $Control->contar($datos);
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
                    <p>Cantidad de horas semanales: <b><?php echo $resultado ?></b></p>
                </div>

        </div>
    </div>
</div>

<?php 

include_once("../estructura/pie.php");
?>