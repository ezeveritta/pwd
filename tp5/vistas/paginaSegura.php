<?php

include_once('../modelos/BaseDatos.php');
include_once('../modelos/Usuario.php');
include_once('../modelos/Rol.php');
include_once('../modelos/UsuarioRol.php');
include_once('../controladores/Session.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 05-11-2020 17:52
 * Descripción:
 */

$session = new SessionControl();

// Si NO estamos logeados, vamos a login.php
if (!$session->validar()) {
    header('Location: login.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <a href="listarUsuarios.php">Listar Usuarios</a> | <a href="../accion/cerrarSession.php">Cerrar Session</a>
</body>

</html>