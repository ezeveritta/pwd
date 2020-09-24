<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
                 controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
                 máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
                 cargado, en caso contrario mostrar un mensaje indicando el problema. 

 */

$Titulo = " Ejercicio 1";
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-5">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="vernumero.php" id="form_ej1" name="form_ej1" method="post" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°1</h5>

                    <div class="form-group mt-5">
                        <label class="" for="numero">Ingrese un valor</label>
                        <input type="number" name="numero" class="form-control" id="numero">
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-3 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>
                    Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                    respuesta, que permita volver a la página anterior.
                </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
