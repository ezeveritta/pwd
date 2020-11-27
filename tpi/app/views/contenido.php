<?php

require_once('../controllers/ContenidoControl.php');
require_once('../../utiles/funciones.php');

// Controlador
$control = new ContenidoControl();

// Obtengo contenido de "public/files"
$contenido = $control->abrirDirectorio('');

// Si la url tiene campo "resultado", lo muestro
$datos = data_submitted();
echo get_aviso($datos);

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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    .btn_eliminar {
        display: none;
    }
    label:hover .btn_eliminar {
        display: inline-block;
    }
    </style>
</head>
<body>
    <div role="main" class="contain d-flex justify-content-center">
        <form action="comprimir.php" method="post" class="border px-5 py-3 mt-5 rounded bg-light">
            <h1 class="mb-3">Contenido</h1>
            <?php
                $indice = 1;
                foreach ($contenido as $archivo)
                {
                    echo    "<label class=\"d-block m-1\">
                                <input type=\"checkbox\" name=\"elemento_{$indice}\" value=\"{$archivo}\"/>
                                <a href=\"../../public/files/$archivo\" class=\"text-dark\" target=\"_blank\">
                                    $archivo
                                </a>
                                <a href=\"eliminar.php?archivo=../../public/files/$archivo\" class=\"btn_eliminar float-right\">x</a>
                             </label>";
                    $indice++;
                }
            ?>
            <br>
            <input type="submit" class="btn btn-primary btn-large w-100" value="Comprimir">
        </form>
    </div>
</body>
</html>



<?php } ?>