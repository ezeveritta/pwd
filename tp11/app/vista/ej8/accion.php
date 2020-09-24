<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
*               función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
*               clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
*               es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
*               de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
*               formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
*               un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
*               Agregar un botón para limpiar el formulario y volver a consultar.
 */

$Titulo = " Ejercicio 8 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej8Control.php");
$datos = data_submitted();
$Control = new ej8Control();

if (count($datos) > 0)
{
    // Controlador
    $resultado = $Control->obtener_precio($datos);
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
                    <p>$<?php echo $resultado ?></b></p>
                </div>

        </div>
    </div>
</div>

<?php 

include_once("../estructura/pie.php");
?>