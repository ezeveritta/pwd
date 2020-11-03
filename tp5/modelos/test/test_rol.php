<?php

include_once('../BaseDatos.php');
include_once('../Rol.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 03-11-2020 14:25
 * Descripción:
 */


/////////////////////////////////////////////////////////////////////////////
// BUSCAR
$objRol = new Rol();
//$objRol->buscar(2);
//echo $objRol;


/////////////////////////////////////////////////////////////////////////////
// INSERTAR 
$objRol2 = new Rol();
$objRol2->cargar('testinsertar');
//echo $objRol2->insertar();


/////////////////////////////////////////////////////////////////////////////
// MODIFICAR 
$objRol3 = new Rol();
//$objRol3->buscar(5);
//$objRol3->set_descripcion('modificado');
//echo $objRol3->modificar();


/////////////////////////////////////////////////////////////////////////////
// ELIMINAR 
$objRol4 = new Rol();
$objRol4->buscar(5);
//echo $objRol4->eliminar();



/////////////////////////////////////////////////////////////////////////////
// LISTAR
foreach (Rol::listar() as $u) {
    echo "<br><hr>$u";
}