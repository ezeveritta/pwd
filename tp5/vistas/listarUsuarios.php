<?php

include_once('../modelos/BaseDatos.php');
include_once('../modelos/Usuario.php');
include_once('../modelos/Rol.php');
include_once('../modelos/UsuarioRol.php');
include_once('../controladores/Session.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 05-11-2020 17:54
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
    <style>table, tr > *{border:1px solid black; padding: 3px;</style>
    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>contraseña</th>
            <th>email</th>
            <th>deshabilitado</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php
            foreach (Usuario::listar() as $u)
            {
                echo "<tr>
                        <td>{$u->get_id()}</td>
                        <td>{$u->get_nombre()}</td>
                        <td>{$u->get_pass()}</td>
                        <td>{$u->get_mail()}</td>
                        <td>{$u->get_deshabilitado()}</td>
                        <td><a href=\"../accion/actualizarLogin.php?id={$u->get_id()}\">Actualizar</a></td>
                        <td><a href=\"../accion/eliminarLogin.php?id={$u->get_id()}\">Eliminar</a></td>
                     </tr>";
            }
        ?>
    </table>
</body>

</html>