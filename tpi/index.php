<?php

phpinfo();

/*
function folderToZip($folder, &$zipFile, $exclusiveLength)
{
    $handle = opendir($folder);
    while (false !== $f = readdir($handle)) {
        if ($f != '.' && $f != '..') {
            $filePath = "$folder/$f";
            // Remove prefix from file path before add to zip.
            $localPath = substr($filePath, $exclusiveLength);
            if (is_file($filePath)) {
                $zipFile->addFile($filePath, $localPath);
            } elseif (is_dir($filePath)) {
                // Add sub-directory.
                $zipFile->addEmptyDir($localPath);
                folderToZip($filePath, $zipFile, $exclusiveLength);
            }
        }
    }
    closedir($handle);
}

$arreglo_items = ['item1.png'];
// Definimos la ruta donde crear el archivo comprimido

$rutaDestino = "temp";
$rutaArchivos = "test";
$exclusiveLength = 0;

// Definimos las variables a utilizar
$ZIP = new ZipArchive();
$fecha = new DateTime();
$nombreZip = 'FiDrive_descarga_' . $fecha->format("Y-m-d_H-i-s") . '.zip';

if ($ZIP->open($rutaDestino.'/'.$nombreZip, ZIPARCHIVE::CREATE) === true) {
    
    // Añadimos los archivos
    foreach ($arreglo_items as $item)
    {
        $ruta = $rutaArchivos . '/' . $item;
        // Si es una carpeta, utilzamos la función para añadir una carpeta completa
        if (is_dir($ruta))
        {
            folderToZip($ruta, $ZIP, $exclusiveLength);
        } 
        // Si es un archivo, lo añadimos
        else
        {
            $ZIP->addFile($item);
        }
    }
    
    // Guardamos el archivo
    $ZIP->close();
    echo 'Creado ' . $nombreZip;
} else {
    echo 'Error creando ' . $nombreZip;
}

?>*/