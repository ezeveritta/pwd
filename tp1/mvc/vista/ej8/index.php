<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 11/09/2020
 * Descripción: La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                Agregar un botón para limpiar el formulario y volver a consultar.

 */

$Titulo = " Ejercicio 3"; 
include_once("../estructura/cabecera.php");
?>

<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    <p>
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
        Agregar un botón para limpiar el formulario y volver a consultar.
    </p>

    
    <form action="accion.php" name="form" id="form" method="get" style="width: 300px">
        <!-- Edad -->
        <div class="form-goup">
            <label for="edad">Edad:</label>
            <input type="number" class="form-control" id="edad" name="edad"><br>
        </div>
        <!-- Estudiante -->
        <div class="checkbox">
            <label>
                <input type="checkbox" id="estudiante" name="estudiante">
                Soy estudiante
            </label>
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
