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

$Titulo = " Ejercicio 8"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
        <br><br><br>
    <div class="row h-100">
        <div class="col-sm-12">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="accion.php" id="form_ej7" name="form_ej7" method="post" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°8</h5>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Edad</label>
                        <input type="text" name="edad" class="form-control" id="edad">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Estudios</label>
                        <div class="checkbox">
                            <input type="checkbox" name="estudiante" id="estudiante">
                            <label for="estudiante" class="">Soy estudiante</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-2 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
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
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
