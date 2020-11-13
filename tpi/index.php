<?php

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


$folder = 'public';
$zip = new ZipArchive();
$exclusiveLength = 0;

$filename = 'public.zip';

if ($zip->open($filename, ZIPARCHIVE::CREATE) === true) {
    folderToZip($folder, $zip, $exclusiveLength);
    $zip->close();
    echo 'Creado ' . $filename;
} else {
    echo 'Error creando ' . $filename;
}

?>