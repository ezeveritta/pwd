<?php

/* Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 07/09/2020
 * Descripción: Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior.
 */

?>

<html>
    <header>
        <title>PWD TP1 - EJ1</title>
    </header>
    <body>
        <form method="post" action="vernumero.php">
            <label for="inpNumero">Ingrese un número: </label><br>
            <input type="number" id="inpNumero" name="inpNumero"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>