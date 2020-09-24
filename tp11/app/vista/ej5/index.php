<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
 *               “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
 *               estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
 *               apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
 *               un mensaje que indique el tipo de estudios que posee y su sexo.
 */

$Titulo = " Ejercicio 5"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-auto">
            
            <div class="card card-block w-50 mx-auto p-5">
                <form class="form w-100" action="accion.php" id="form_ej5" name="form_ej5" method="post" data-toggle="validator">

                    <h5 class="w-100 text-center">Ejercicio N°5</h5>

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

                    <div class="form-group mt-1 w-100">
                        <label class="" for="estudios">Estudios</label> <br>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="educacion" id="educacion_1" value="No tiene estudios">
                                <label for="educacion_1" class="text-right">No tine estudios</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="educacion" id="educacion_2" value="Estudios primarios">
                                <label for="educacion_2" class="text-right">Estudios primarios</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="educacion" id="educacion_3" value="Estudios secundarios">
                                <label for="educacion_3" class="text-right">Estudios secundarios</label>
                            </div>
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group mt-1">
                        <label class="" for="genero">Género</label>
                        <select name="genero" id="genero" class="form-control">
                            <option value="hombre">Masculino</option>
                            <option value="mujer">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-2 mb-3 w-100">Enviar</button>
                </form>
            </div>
            
            <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                <p>
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
                </p>
            </div>

        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
