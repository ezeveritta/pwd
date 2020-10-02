<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
 *               “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
 *               estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
 *               apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
 *               un mensaje que indique el tipo de estudios que posee y su sexo.
 */

$Titulo = " Ejercicio 5 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej5Control.php");
$datos = data_submitted();
$Control = new ej5Control();

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