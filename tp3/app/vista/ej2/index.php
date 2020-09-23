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
