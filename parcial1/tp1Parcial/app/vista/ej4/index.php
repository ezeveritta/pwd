<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
 *               esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
 *               persona es mayor de edad o no; (si la edad es mayor o igual a 18).
 *               Enviar los datos usando el método GET y luego probar de modificar los datos
 *               directamente en la url para ver los dos posibles mensajes.
 */

$Titulo = " Ejercicio 4"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-5">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="accion.php" id="form_ej4" name="form_ej4" method="get" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°4</h5>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="apellido">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Edad</label>
                        <input type="number" name="edad" class="form-control" id="edad">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="numero">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="direccion">
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-2 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>
                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos
                directamente en la url para ver los dos posibles mensajes.
                </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
