<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Crear una página con un formulario que contenga dos input de tipo text y un select. En
 *               los inputs se ingresarán números y el select debe dar la opción de una operación
 *               matemática que podrá resolverse usando los números ingresados. En la página que
 *               procesa la información se debe mostrar por pantalla la operación seleccionada, cada
 *               uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
 *               formulario:
 */

$Titulo = " Ejercicio 6"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-5">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="accion.php" id="form_ej7" name="form_ej7" method="post" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°6</h5>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Valor A</label>
                        <input type="text" name="valorA" class="form-control" id="valorA">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Valor b</label>
                        <input type="text" name="valorB" class="form-control" id="valorB">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="operacion">Operación</label>
                        <select name="operacion" id="operacion" class="form-control">
                            <option value="/">División</option>
                            <option value="*">Multiplicación</option>
                            <option value="+">Suma</option>
                            <option value="-">Resta</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-2 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>
                Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:
                </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
