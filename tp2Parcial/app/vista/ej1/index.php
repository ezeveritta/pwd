<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Investigue y pruebe la validación de formularios usando alguna librería o framework
 *               javaScript (JQuery, Mootools, Dojo, Prototype, etc).
 */

$Titulo = " Ejercicio 1";
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-5">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="vernumero.php" id="form" name="form" method="get">

                    <h5 class="w-100 text-center">Ejercicio N°1</h5>

                    <div class="form-group mt-5">
                        <label class="" for="numero">Ingrese un valor numérico</label>
                        <input type="text" name="numero" class="form-control" id="numero">
                    </div>

                    <button id="inpSubmit" type="submit" class="btn btn-primary btn-lg mt-3 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>
                Investigue y pruebe la validación de formularios usando alguna librería o framework
                javaScript (JQuery, Mootools, Dojo, Prototype, etc).
                </p>
            </div>

        </div>
    </div>
</div>

<script  type="text/javascript">
    $(document).ready(function(){
        console.log("holaa :)");
        var inpNumero = $('#numero'), form = $('#form');

        inpNumero.keyup(function()
        {
            if (!isNaN(inpNumero.val()))
            {
                inpNumero.css("border", "1px solid green");
            } else
            {
                inpNumero.css("border", "1px solid red");
            }
        })

        form.validate({
            rules: {
                numero: {
                    required: true,
                    number: true
                }
            }
        })
    });
</script>


<?php 
include_once("../estructura/pie.php");
?>
