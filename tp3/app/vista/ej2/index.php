<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                contenido en un textarea.

 */

$Titulo = " Ejercicio 2"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-auto text-center">
            
            <div class="card card-block w-50 mx-auto">
                <form class="form w-100" action="accion.php" id="form_ej2" name="form_ej2" method="post" enctype="multipart/form-data" data-toggle="validator">

                    <h5 class="mt-3">Cargar archivo de texto (.txt)</h5>

                    <div class="custom-file mt-3 w-75">
                        <input type="file" name="miArchivo" class="custom-file-input" id="miArchivo" multiple lang="ar" dir="rtl">
                        <label class="custom-file-label text-left" for="miArchivo">Subir Archivo</label>
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-3 mb-3 w-75">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                contenido en un textarea.</p>
            </div>

        </div>
    </div>
</div>

<?php 
include_once("../estructura/pie.php");
?>
