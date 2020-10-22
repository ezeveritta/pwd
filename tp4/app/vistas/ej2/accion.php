<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 21/10/2020
 * Descripcion:  Prueba de uso del controlador PersonaControl
 */

// Archivos a testear
include_once("../../modelos/Persona.php");
include_once("../../modelos/Auto.php");
include_once("../../controladores/PersonaControl.php");

// Obtener datos de formularios
include_once("../../utiles/funciones.php");
$datos = data_submitted();

// Ejecutar acción
$exito = false;
switch($datos["accion"])
{
    case "alta":
        $Control = new PersonaControl();
        $exito = $Control->Alta($datos);
        break;
    case "modificar":
        break;
    case "eliminar":
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acción</title>
</head>
<body>
    <h2>Resultado</h2>
    <p><?php
        echo ($exito) ? "Operación exitosa" : "Operación fallida";
    ?></p>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>