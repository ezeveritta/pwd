<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 11/09/2020
 * Descripción: Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:

 */

$Titulo = " Ejercicio 3"; 
include_once("../estructura/cabecera.php");
include_once("../../control/eje7Control.php");

// Enviar datos al controlador
$datos = data_submitted();
$control = new eje7Control();

$respuesta = $control->calcular($datos);
?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >

    <p>
        <b>Respuesta: </b> 
        <?php echo $respuesta ?>
    </p>

</div>

<?php 

include_once("../estructura/pie.php");
?>