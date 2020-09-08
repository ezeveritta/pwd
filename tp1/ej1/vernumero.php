<?php

/* Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 07/09/2020
 * Descripción: Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior.
 */

 // CONTROLADOR

 if($_POST)
 {
     $numero = $_POST["inpNumero"];
     if(is_numeric($numero) && strlen($numero) > 0)
     {
        if ($numero > 0)
        {
            $resultado = "El número es Positivo!";
        }
        elseif ($numero < 0)
        {
            $resultado = "El número es Negativo!";
        }
        else
        {
            $resultado = "El número es Cero!";
        }
     } else
     {
        $resultado = "ERROR: Valor ingresado invalido.";
     }
 }
 else
 {
     
    $resultado = "ERROR: No se obtuvo un valor correctamente.";
 }

?>

<html>
    <header>
        <title>(resultado) PWD TP1 - EJ1</title>
    </header>
    <body>
        <h1>Resultado</h1>
        <p>
        <?php
            echo $resultado;
        ?>
        </p>
        <a href="index.php">Regresar</a>
    </body>
</html>