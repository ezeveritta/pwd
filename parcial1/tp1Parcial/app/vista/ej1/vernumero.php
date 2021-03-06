<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: En el servidor se deberá
                controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
                máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
                cargado, en caso contrario mostrar un mensaje indicando el problema. 


 */

$Titulo = " Ejercicio 1 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej1Control.php");
$datos = data_submitted();
$Control = new ej1Control();

if (isset($datos['numero']))
{
    // Controlador
    $resultado = $Control->verificar($datos['numero']);
} else
{
    $resultado = "ERROR: no se obtuvo un número.";
}


?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 text-center">
            
                <div class="alert alert-info w-75 mx-auto mt-5" role="alert">
                    <h6>Resultado!</h6> <br>
                    <?php echo $resultado ?>
                </div>

        </div>
    </div>
</div>

<?php 

include_once("../estructura/pie.php");
?>