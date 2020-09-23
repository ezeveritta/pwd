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
        <div class="col-sm-12 my-auto text-center">
            
            <div class="card card-block w-50 mx-auto">
                <form class="form w-100" action="accion.php" method="post" enctype="multipart/form-data">

                    <h5 class="mt-3">Cargar documento (.pdf o .doc)</h5>

                    <div class="custom-file mt-3 w-75">
                        <input type="file" name="miArchivo" class="custom-file-input" id="miArchivo" multiple lang="ar" dir="rtl">
                        <label class="custom-file-label text-left" for="miArchivo">Subir Archivo</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-3 mb-3 w-75">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
                 controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
                 máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
                 cargado, en caso contrario mostrar un mensaje indicando el problema. </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
