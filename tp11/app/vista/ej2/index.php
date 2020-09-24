<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Crear una página php que contenga un formulario HTML que permita ingresar las horas
 *               de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
 *               Enviar los datos del formulario por el método Get a otra página php que los reciba y
 *               complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
 *               se cursan por semana.
 */

$Titulo = " Ejercicio 2"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-auto">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="accion.php" id="form_ej2" name="form_ej2" method="post" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°2</h5>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Horas Lunes</label>
                        <input type="number" name="lunes" class="form-control" id="lunes">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Horas Martes</label>
                        <input type="number" name="martes" class="form-control" id="martes">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Horas Miercoles</label>
                        <input type="number" name="miercoles" class="form-control" id="miercoles">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Horas Jueves</label>
                        <input type="number" name="jueves" class="form-control" id="jueves">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Horas Viernes</label>
                        <input type="number" name="viernes" class="form-control" id="viernes">
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-2 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>
                Crear una página php que contenga un formulario HTML que permita ingresar las horas
                de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                Enviar los datos del formulario por el método Get a otra página php que los reciba y
                complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                se cursan por semana.
                </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
