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
?>

<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    <p>
        Crear una página con un formulario que contenga dos input de tipo text y un select. En
        los inputs se ingresarán números y el select debe dar la opción de una operación
        matemática que podrá resolverse usando los números ingresados. En la página que
        procesa la información se debe mostrar por pantalla la operación seleccionada, cada
        uno de los operandos y el resultado obtenido de resolver la operación.
    </p>

    
    <form action="accion.php" name="form" id="form" method="get" style="width: 300px">
        <!-- Numero 1 -->
        <div class="form-goup">
            <label for="num1">Número 1:</label>
            <input type="number" class="form-control" id="num1" name="num1"><br>
        </div>
        <!-- Numero 2 -->
        <div class="form-goup">
            <label for="num2">Número 2:</label>
            <input type="number" class="form-control" id="num2" name="num2"><br>
        </div>
        <!-- Operación -->
        <div class="form-goup">
            <label for="operacion">Operacion</label>
            <select name="operacion" class="form-control" id="operacion">
                <option value="suma">suma</option>
                <option value="resta">resta</option>
                <option value="multiplicacion">multiplicacion</option>
            </select>
        </div>
        <br>
        <!-- Submit -->
        <div class="form-goup">
            <input type="submit" class="btn btn-primary" value="Enviar"><br>
        </div>
    </form>

</div>


<?php 

include_once("../estructura/pie.php");
?>
