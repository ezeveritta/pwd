<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear una página php que contenga un formulario HTML como el que se indica en la
 *               imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
 *               que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
 *               nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
 *               Cambiar el método Post por Get y analizar las diferencias.
 */

$Titulo = " Ejercicio 3 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej3Control.php");
$datos = data_submitted();
$Control = new ej3Control();

if (count($datos) > 0)
{
    // Controlador
    $resultado = $Control->verificarUsuario($datos);
} else
{
    $resultado = "ERROR: no se obtuvieron datos.";
}


?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 text-center">
                <?php
                    if ($resultado === true)
                    {
                ?>
                    <div class="alert alert-info w-75 mx-auto mt-5" role="alert">
                        <h6>Resultado!</h6> <br>
                        <p>Bienvenido <b><?php echo $datos["username"] ?></b> !</p>
                    </div>

                <?php
                    }else{
                ?>
                    <div class="alert alert-warning w-75 mx-auto mt-5" role="alert">
                        <h6>Resultado!</h6> <br>
                        <p><b><?php echo $resultado ?></b></p>
                    </div>

                <?php
                    }
                ?>
        </div>
    </div>
</div>

<?php 

include_once("../estructura/pie.php");
?>