<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 */

// Header y Lateral
$Titulo = " Ejercicio 3"; 
include_once("../estructura/cabecera.php");


// Controlador
include_once("../../control/ej3Control.php");
$Control = new ej3Control();


// Recolecto datos de GET o POST
$datos = data_submitted();
// Obtener archivo del formulario
$portada = $_FILES['portada'];
// Definimos Directorio donde se guarda el archivo
$dir = "archivos/";

// Verifico si hay datos
if (count($datos) > 0)
{
    // Controlador
    $Control->set_archivo($portada);

    // Validar tipo imagen
    $validar = $Control->validar();
    $resultado = false;
    if ($validar === true)
    {
        $subir = $Control->subir();
        if ($subir === true)
        {
            $resultado = true;
            $direccion = $Control->get_direccion();
        }
        else
        {
            $error = $subir;
            $resultado = false;
        }
    }
    else
    {
        $error = $validar;
    }
}
?>

<div class="col-md-10">
    <div class="row h-100">
        <div class="col-sm-12">
            
                <?php 
                if ($resultado)
                {
                ?>
                    <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                        <h2 class="text-primary">La Película introducida es:</h2>

                        <img align="right" src="<?php echo $direccion ?>" alt="Portada de la película" width="220">
                        
                        <p><b>Titulo:</b> <?php echo $datos["titulo"] ?></p>
                        <p><b>Actores:</b> <?php echo $datos["actores"] ?></p>
                        <p><b>Director:</b> <?php echo $datos["director"] ?></p>
                        <p><b>Guión:</b> <?php echo $datos["guion"] ?></p>
                        <p><b>Producción:</b> <?php echo $datos["produccion"] ?></p>
                        <p><b>Año:</b> <?php echo $datos["anio"] ?></p>
                        <p><b>Nacionalidad:</b> <?php echo $datos["nacionalidad"] ?></p>
                        <p><b>Género:</b> <?php echo $datos["genero"] ?></p>
                        <p><b>Duración:</b> <?php echo $datos["duracion"] ?></p>
                        <p><b>Restricciones de edad:</b> <?php echo $datos["restriccion"] ?></p>
                    </div>
                <?php
                }
                else
                {
                ?>
                    <div class="alert alert-warning w-75 mx-auto mt-5" role="alert">
                        <h6>Error al subir el archivo!</h6><br>
                        <p><?php echo $error ?></p>
                    </div>
                <?php
                }
                ?>

        </div>
    </div>
</div>