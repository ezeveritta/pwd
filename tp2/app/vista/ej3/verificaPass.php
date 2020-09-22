<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 */

// Enviar datos al controlador

$Titulo = " Ejercicio 3"; 
include_once("../estructura/cabecera.php");

$datos = data_submitted();
/**Los datos del formulario son enviados a un script
                verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                y en caso contrario un mensaje de error. */
$usuarios = [
    ["usuario" => "user1", "clave" => "12345678"],
    ["usuario" => "admin", "clave" => "admin"]
];

$valido = false;

foreach ($usuarios as $user)
{
    if ($user["usuario"] == $datos["username"] && $user["clave"] == $datos["password"])
    {
        $valido = true;
    }
}
?>


<div id="contenido" style="height: 450px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
    <p>
        <?php 
            if ($valido)
            {
                echo "Bienvenido " . $datos["username"] . "!! :)";
            }
            else
            {
                echo "El usuario y contraseña proporcionados no se encuentran en nuestra base de datos :(";
            }
        ?>       
    </p>

</div>