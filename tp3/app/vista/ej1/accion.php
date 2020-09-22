<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 11/09/2020
 * Descripción: Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:

 */

$Titulo = " Ejercicio 1"; 
include_once("../estructura/cabecera.php");

// Enviar datos al controlador
$datos = data_submitted();

$dir = "archivos/"; // Definimos Directorio donde se guarda el archivo
$archivo = $_FILES['miArchivo'];

print_r($archivo["error"]);

?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >

    <p>
        <b>Respuesta: </b> 
        <?php 
            // Comprobamos que no se hayan producido errores
            if ($archivo["error"] <= 0) 
            {
                echo "Nombre: " . $archivo['name'] . "<br />";
                echo "Tipo: " . $archivo['type'] . "<br />";
                echo "Tamaño: " . ($archivo["size"] / 1024) . " kB<br />";
                echo "Carpeta temporal: " . $archivo['tmp_name']." <br />";

                // Intentamos copiar el archivo al servidor.
                if (!copy($archivo['tmp_name'], $dir.$archivo['name']))
                {
                    echo "ERROR: no se pudo cargar el archivo";
                } else
                {
                    echo "El archivo " . $archivo["name"] . " se ha copiado con Éxito <br />";
                    echo '<a href="' . $dir.$archivo['name'] . '" >link al archivo</a>';
                }
            } else
            {
                echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
            }
        ?>
    </p>

</div>

<?php 

include_once("../estructura/pie.php");
?>