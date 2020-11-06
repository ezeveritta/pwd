<?php

include_once('../BaseDatos.php');
include_once('../Usuario.php');

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 03-11-2020 12:50
 * Descripción:
 */


/////////////////////////////////////////////////////////////////////////////
// BUSCAR
$objUsuario = new Usuario();
//$objUsuario->buscar(3);
//echo $objUsuario;


/////////////////////////////////////////////////////////////////////////////
// INSERTAR 
$objUsuario2 = new Usuario();
$objUsuario2->cargar('testinsertar', '4321', 'em@ail.com', '');
//echo $objUsuario2->insertar();


/////////////////////////////////////////////////////////////////////////////
// MODIFICAR 
$objUsuario3 = new Usuario();
//$objUsuario3->buscar(5);
$objUsuario3->set_nombre('modificado');
$objUsuario3->set_deshabilitado('current_timestamp()');
//echo $objUsuario3->modificar();


/////////////////////////////////////////////////////////////////////////////
// ELIMINAR 
$objUsuario4 = new Usuario();
//$objUsuario4->buscar(5);
//echo $objUsuario4->eliminar();



/////////////////////////////////////////////////////////////////////////////
// LISTAR
//foreach (Usuario::listar() as $u) {
//    echo "<br><hr>$u";
//}


////////////////////////////////////////////////////////////////////////////
// validar_session
echo (Usuario::validar_session('ezeveritta', '12321')) ? 'usuario encontrado' : 'usuario <b>no</b> encontrado';