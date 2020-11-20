<?php

// Obtengo información de POST
if (count($_POST) < 1) {
    header("Location: contenido.php?resultado=error");
    die();
}

$datos = $_POST;
print_r($datos);

// Defino información
$rutaDestino = '../../public/files/';
$DT          = new DateTime();
$nombre      = $DT->format('H_m_s');
$zip         = new ZipArchive();

// Creo el archivo zip
if ($zip->open($rutaDestino.$nombre.'.zip', ZIPARCHIVE::CREATE) === true)
{
    // Añadimos los archivos
    foreach ($datos as $archivo) { $zip->addFile($rutaDestino . $archivo); }
    // Guardamos
    $zip->close();
    // Redireccionamos a "contenido.php"
    header("Location: contenido.php?resultado=completado");
    die();
} else {
    header("Location: contenido.php?resultado=error");
    die();
}