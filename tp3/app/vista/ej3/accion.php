<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 */

// Header y Lateral
$Titulo = " Ejercicio 3"; 
include_once("../estructura/cabecera.php");

// Recolecto datos de GET o POST
$datos = data_submitted();
// Definimos Directorio donde se guarda el archivo
$dir = "archivos/";
$portada = $_FILES['portada'];


// Verifico si hay datos
if (count($datos) > 0)
{
    // Verifico que la portada es una imagen
    $hayImagen = false;
    //if (isset($datos['portada']))
    //{
        //if ($datos['portada']["type"] == "image/jpg")
        //{
            // Intentamos copiar el archivo al servidor.
            if (!copy($portada['tmp_name'], "archivos/".$portada['name']))
            {
                echo "ERROR: no se pudo cargar la portada";
            } else
            {
                $hayImagen = true;
            }
        //}
    //}
}

?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
        <h2 class="text-primary">La Película introducida es:</h2>

        <?php
            if ($hayImagen)
            {
        ?>
        <img src="archivos/<?php echo $portada["name"] ?>" alt="Portada de la película">

        <?php
            }
        ?>
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

</div>