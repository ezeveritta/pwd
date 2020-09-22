<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
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
        <!-- Valor A -->
        <div class="form-goup">
            <label for="num1">Valor A:</label>
            <input type="number" class="form-control" id="inp1" name="inp1"><br>
        </div>
        <!-- Valor B -->
        <div class="form-goup">
            <label for="num1">Valor B:</label>
            <input type="number" class="form-control" id="inp2" name="inp2"><br>
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
            var inp1 = $("#inp1"), inp2 = $("#inp2"), val = false;
            
            if (inp1.val() == inp2.val())
            {
                val = true;
            }
            else
            {
                inp2.addClass("is-invalid");
                val = false;
            }
            console.log(val);
            return val;
        }
    
</script>
<?php 

include_once("../estructura/pie.php");
?>
