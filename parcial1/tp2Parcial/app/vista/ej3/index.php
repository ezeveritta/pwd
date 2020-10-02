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
                <form id="form_ej3" action="verificaPass.php" method="post" class="form-singin" data-toggle="validator">
                    <h1 class="h5 ">Member Login</h1>
                    
                    <div class="form-group">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg btn-block">
                        Login
                    </button>
                </form>
            </div>
            
            <div class="container text-center mt-5">
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#puntoA" role="button" aria-expanded="false" aria-controls="puntoA">Punto A</a>
                    <a class="btn btn-primary" data-toggle="collapse" href="#puntoB" role="button" aria-expanded="false" aria-controls="puntoB">Punto B</a>
                    <a class="btn btn-primary" data-toggle="collapse" href="#puntoC" role="button" aria-expanded="false" aria-controls="puntoC">Punto C</a>
                </p>
                <div class="row">
                    <div class="col">
                    <div class="collapse multi-collapse" id="puntoA">
                        <div class="card card-body">
                            Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                            y la password para loguearse. Los datos del formulario son enviados a un script
                            verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                            arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                            de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                            y en caso contrario un mensaje de error. 
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="collapse multi-collapse" id="puntoB">
                        <div class="card card-body">
                            Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
                            usuario y la contraseña antes de ser enviados al servidor sino que también debe
                            realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
                            caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
                            letras y números).                   
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="collapse multi-collapse" id="puntoC">
                        <div class="card card-body">
                            Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar al siguiente:
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
