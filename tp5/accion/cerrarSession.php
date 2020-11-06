<?php

include_once('../modelos/BaseDatos.php');
include_once('../modelos/Usuario.php');
include_once('../modelos/Rol.php');
include_once('../modelos/UsuarioRol.php');
include_once('../controladores/Session.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 05-11-2020 18:10
 * Descripción:
 */

$session = new SessionControl();

// validamos el login
if (!$session->validar()) {
    header('Location: ../vistas/login.php');
    die();
}

// Si es valido, cerramos session
SessionControl::cerrar();
header('Location: ../vistas/login.php');
die();
