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

$dir = "archivos/"; // Definimos Directorio donde se guarda el archivo
$archivo = $_FILES['miArchivo'];

?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    <p>
        <?php 
            if ($archivo["error"] <= 0) 
            {
                // Verificamos las consignas
                if ($archivo["type"] == 'text/plain')
                {
                    // Intentamos copiar el archivo al servidor.
                    if (!copy($archivo['tmp_name'], $dir.$archivo['name']))
                    {
                        echo "ERROR: no se pudo cargar el archivo";
                    } else
                    {
                        echo "El archivo " . $archivo["name"] . " se ha copiado con Éxito <br />";
                        echo '<a href="' . $dir.$archivo['name'] . '" >link al archivo</a>';

                        echo "<br><textarea>". file_get_contents("archivos/".$archivo["name"]) ."</textarea>";
                    }
                }
                else
                {
                    echo "ERROR: El archivo no es TXT.";
                }
            }
            else
            {
                echo "Se produjo un error.";
            }
        ?>
    </p>

</div>

<?php 

include_once("../estructura/pie.php");
?>