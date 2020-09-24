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
        <div class="col-sm-12 my-auto">
            
            <div class="card card-block w-75 mt-3 mx-auto">
                <h5 class="h5 p-2 pl-4 bg-light text-primary font-weight-bold"><i class="fas fa-edit"></i> Cinem@as</h5>

                <form action="accion.php" id="form_ej4" method="post" class="form-singin p-2" data-toggle="validator"  enctype="multipart/form-data">
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
                            <input type="file" name="portada" class="custom-file-input" id="portada" lang="ar" dir="rtl">
                            <label class="custom-file-label text-left" for="miArchivo">Portada</label>
                            <div class="invalid-feedback"></div>
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