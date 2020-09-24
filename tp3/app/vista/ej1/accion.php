<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: En el servidor se deberá
                controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
                máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
                cargado, en caso contrario mostrar un mensaje indicando el problema. 


 */

$Titulo = " Ejercicio 1 - Resultado"; 
include_once("../estructura/cabecera.php");

// Controlador
include_once("../../control/ej1Control.php");
$Control = new ej1Control();

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