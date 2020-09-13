<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 13/09/2020
 * Descripción: Investigue y pruebe la validación de formularios usando alguna librería o framework
                javaScript (JQuery, Mootools, Dojo, Prototype, etc).
 */

$Titulo = " Ejercicio 1"; 
include_once("../estructura/cabecera.php");
?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    <p>
        Investigue y pruebe la validación de formularios usando alguna librería o framework
        javaScript (JQuery, Mootools, Dojo, Prototype, etc).
    </p>

    
    <form action="accion.php" name="form" id="form" method="get" style="width: 300px" onSubmit="return validar()">
        <!-- Numero 1 -->
        <div class="form-goup">
            <label for="num1">Número 1:</label>
            <input type="number" class="form-control" id="num1" name="num1"><br>
        </div>
        <br>
        <!-- Submit -->
        <div class="form-goup">
            <input type="submit" class="btn btn-primary" value="Enviar" ><br>
        </div>
    </form>

</div>


<script>
    function validar()
        {
            var inp = $("#num1"), val = false;
            
            if (inp.val().length >= 8)
            {
                val = true;
            }
            else
            {
                inp.css("border", "1px solid red;");
            }
            return val;
        }
    
</script>
<?php 

include_once("../estructura/pie.php");
?>
