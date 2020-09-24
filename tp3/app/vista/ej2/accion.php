<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                contenido en un textarea.


 */

$Titulo = " Ejercicio 1"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej2Control.php");
$Control = new ej2Control();

if (isset($_FILES['miArchivo']))
{
    // Obtener archivo del formulario
    $archivo = $_FILES['miArchivo'];
    // Definimos Directorio donde se guarda el archivo
    $dir = "archivos/";

    // Controlador
    $Control->set_archivo($archivo);

    // Validar tipo PDF o DOC y peso menor a 2MB
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
        <div class="col-sm-12 text-center">
            
                <?php 
                if ($resultado)
                {
                ?>
                    <div class="alert alert-info w-75 mx-auto mt-5" role="alert">
                        <h6>Archivo subido correctamente!</h6> <br>
                        <a href="<?php echo $direccion ?>" target="_blank">Ir al archivo</a>
                        <textarea name="texto" id="texto" class="text-area w-100" rows="10">
                            <?php echo $Control->get_descripcion(); ?>
                        </textarea>
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

<?php 

include_once("../estructura/pie.php");
?>