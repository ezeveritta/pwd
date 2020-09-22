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


<div class="w-50 shadow rounded"  style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">

    <form class="form" action="accion.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="archivo">Subir Archivo</label>
            <input type="file" name="miArchivo" id="miArchivo" class="form-control w-25">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>


<?php 
include_once("../estructura/pie.php");
?>
