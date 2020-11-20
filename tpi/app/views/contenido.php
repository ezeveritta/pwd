<?php

require_once('../controllers/ContenidoControl.php');

// Controlador
$control = new ContenidoControl();

// Obtengo contenido de "public/files"
$contenido = $control->abrirDirectorio('');

// Verifico si se encontró contenido
if ($contenido === null)
{
    echo "Sin contenido";
} else
{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
</head>
<body>
    <div class="contenido">
        <form action="comprimir.php" method="post">
            <h1>Contenido</h1>
            <?php

                foreach ($contenido as $archivo)
                {
                    echo "<label><input type=\"checkbox\" name=\"{$archivo}\" value=\"{$archivo}\"/>$archivo</label><br>";
                }

            ?>
            <input type="submit" value="Comprimir">
        </form>
    </div>
</body>
</html>



<?php } ?>