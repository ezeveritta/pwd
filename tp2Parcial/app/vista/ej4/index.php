<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción:  Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
 *               esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
 *               persona es mayor de edad o no; (si la edad es mayor o igual a 18).
 *               Enviar los datos usando el método GET y luego probar de modificar los datos
 *               directamente en la url para ver los dos posibles mensajes.
 */

$Titulo = "Ejercicio 4"; 
include_once("../estructura/cabecera.php");
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12 my-5">
            
            <div class="card card-block w-50 mx-auto">
                <h5 class="h5 p-2 pl-4 bg-light text-primary font-weight-bold">Cinem@as</h5>

                <form action="accion.php" id="form_ej4" method="post" class="form-singin p-3" data-toggle="validator">

                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="titulo" class="font-weight-bold">Titulo</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Titulo" autofocus>
                            <div class="invalid-feedback"></div>
                        </div>

                        
                        <div class="form-group col-md-6 mb-3">
                            <label for="actores" class="font-weight-bold">Actores</label>
                            <input type="text" id="actores" name="actores" class="form-control" placeholder="Actores">
                            <div class="invalid-feedback"></div>
                        </div>

                        
                        <div class="form-group col-md-6 mb-3">
                            <label for="director" class="font-weight-bold">Director</label>
                            <input type="text" id="director" name="director" class="form-control" placeholder="Director">
                            <div class="invalid-feedback"></div>
                        </div>

                        
                        <div class="form-group col-md-6 mb-3">
                            <label for="guion" class="font-weight-bold">Guión</label>
                            <input type="text" id="guion" name="guion" class="form-control" placeholder="Guión">
                        </div>

                        
                        <div class="form-group col-md-6 mb-3">
                            <label for="produccion" class="font-weight-bold">Producción</label>
                            <input type="text" id="produccion" name="produccion" class="form-control">
                        </div>


                        <div class="form-group col-md-2 mb-3">
                            <label for="anio" class="font-weight-bold">Año</label>
                            <input type="text" id="anio" name="anio" class="form-control">
                        </div>

                        
                        <div class="form-group col-md-6 mb-3">
                            <label for="nacionalidad" class="font-weight-bold">Nacionalidad</label>
                            <input type="text" id="nacionalidad" name="nacionalidad" class="form-control">
                        </div>

                        
                        <div class="form-group col-md-4 mb-3">
                            <label for="genero" class="font-weight-bold">Género</label>
                            <select name="genero" id="genero" class="form-control">
                                <option value="Comedia">Comedia</option>
                                <option value="Comedia">Drama</option>
                                <option value="Comedia">Terror</option>
                                <option value="Comedia">Románticas</option>
                                <option value="Comedia">Suspenso</option>
                                <option value="Comedia">Otras</option>
                            </select>
                        </div>

                        
                        <div class="form-group col-md-4 mb-3">
                            <label for="duracion" class="font-weight-bold">Duración</label>
                            <input type="text" id="duracion" name="duracion" class="form-control">
                            (minutos)
                        </div>

                        
                        <div class="form-group col-md-8 mb-3">
                            <label class="font-weight-bold">Restricciónes de edad</label>
                            <div>
                                <input type="radio" id="restriccion" name="restriccion" value="Todo Publico"> Todo Público
                                <input type="radio" id="restriccion1" name="restriccion" value="Mayores de 7 años"> Mayores de 7 años
                                <input type="radio" id="restriccion2" name="restriccion" value="Mayores de 18 años"> Mayores de 18 años
                            </div>
                        </div>

                        
                        <div class="form-group col-sm-12 mb-3">
                            <label for="sinopsis" class="font-weight-bold">Sinopsis</label>
                            <textarea name="sinopsis" class="form-control" id="sinopsis" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group pull-right pb-3">
                        <button type="submit" class="btn btn-primary pull-right">
                            Enviar
                        </button>
                        <button type="reset" class="btn btn-default pull-right">
                            Borrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>
