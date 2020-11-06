<?php

include_once('../modelos/BaseDatos.php');
include_once('../modelos/Usuario.php');
include_once('../modelos/Rol.php');
include_once('../modelos/UsuarioRol.php');
include_once('../controladores/Session.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 05-11-2020 17:44
 * Descripción:
 */

$session = new SessionControl();

// validamos el login
$nombreUsuario = $_POST['nombreUsuario'];
$contraseña = $_POST['contraseña'];
$session->set_nombreUsuario($nombreUsuario);
$session->set_contraseña($contraseña);
if (!$session->validar())
{
    header('Location: ../vistas/login.php');
    die();
}

// Si es valido, guardamos las variables
$session->set_nombreUsuario($nombreUsuario);
$session->set_contraseña($contraseña);

header('Location: ../vistas/paginaSegura.php');
die();