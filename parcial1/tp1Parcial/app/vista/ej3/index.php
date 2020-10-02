<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Crear una página php que contenga un formulario HTML como el que se indica en la
 *               imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
 *               que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
 *               nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
 *               Cambiar el método Post por Get y analizar las diferencias.
 */

$Titulo = " Ejercicio 3"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-5">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="accion.php" id="form_ej3" name="form_ej3" method="get" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°3</h5>

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
                Crear una página php que contenga un formulario HTML como el que se indica en la
                imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                Cambiar el método Post por Get y analizar las diferencias.
                </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
