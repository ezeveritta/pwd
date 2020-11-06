<?php

include_once('../modelos/BaseDatos.php');
include_once('../modelos/Usuario.php');
include_once('../modelos/Rol.php');
include_once('../modelos/UsuarioRol.php');
include_once('../controladores/Session.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 05-11-2020 17:25
 * Descripción:
 */

$session = new SessionControl();

// Si ya estamos logeados, regresamos a paginaSegura.php
if ($session->validar()) {
    header('Location: paginaSegura.php');
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
    <form action="../accion/verificarLogin.php" method="post">
        <label>
            Nombre de Usuario
            <input type="text" name="nombreUsuario" placeholder="Nombre de Usuario">
        </label>
        <label>
            Contraseña
            <input type="text" name="contraseña" placeholder="Contraseña">
        </label>
        <input type="submit" value="Entrar">
    </form>
</body>

</html>