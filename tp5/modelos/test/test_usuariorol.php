<?php

include_once('../BaseDatos.php');
include_once('../UsuarioRol.php');
include_once('../Usuario.php');
include_once('../Rol.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 03-11-2020 14:30
 * Descripción:
 */


/////////////////////////////////////////////////////////////////////////////
// BUSCAR
$objUsuarioRol = new UsuarioRol();
//$objUsuarioRol->buscar(3, 1);
//echo $objUsuarioRol;


/////////////////////////////////////////////////////////////////////////////
// INSERTAR 
// inserto usuario
$objUsuarioRol2 = new UsuarioRol();
$objUsuarioRol2->cargar(1, 2);
//echo $objUsuarioRol2->insertar();


/////////////////////////////////////////////////////////////////////////////
// MODIFICAR 
$objUsuarioRol3 = new UsuarioRol();
//$objUsuarioRol3->buscar(3, 1);
$objUsuarioRol3->set_rol(2);
//echo $objUsuarioRol3->modificar();


/////////////////////////////////////////////////////////////////////////////
// ELIMINAR 
$objUsuarioRol4 = new UsuarioRol();
$objUsuarioRol4->buscar(1, 2);
//echo $objUsuarioRol4->eliminar();



/////////////////////////////////////////////////////////////////////////////
// LISTAR
foreach (UsuarioRol::listar() as $ur) {
    echo "<br><hr>$ur";
}