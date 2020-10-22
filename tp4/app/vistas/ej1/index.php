<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 01/10/2020
 * Descripcion:  Crear la capa de los datos, implementando el ORM (Modelo de datos) para la base de datos
 *               entregada. Recordar que se debe generar al menos, un clase php por cada tabla. Cada clase debe contener
 *               las variables de instancia y sus metodos get y set; ademas de los metodos que nos permitan seleccionar,
 *               ingresar, modificar y eliminar los datos de cada tabla. 
 */

include_once('../../modelos/Auto.php');
include_once('../../modelos/Persona.php');

$autos = Auto::listar();
$personas = Persona::listar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST AUTO ORM</title>
</head>
<body>
    <h1>TEST ORM AUTO</h1>
    <div>
        <table style="width: 50%">
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>DNI Dueño</th>
            </tr>

            <?php
                // Por cada auto
                foreach ($autos as $a)
                {
                    echo "<tr>";

                    echo "<td>" . $a->getPatente() . "</td>";
                    echo "<td>" . $a->getMarca() . "</td>";
                    echo "<td>" . $a->getModelo() . "</td>";
                    echo "<td>" . $a->getDniDuenio() . "</td>";

                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <h1>TEST ORM PERSONAS</h1>
    <div>
        <table style="width: 50%">
            <tr>
                <th>NroDNI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Teléfono</th>
                <th>Domicilio</th>
            </tr>

            <?php
                // Por cada persona
                foreach ($personas as $p)
                {
                    echo "<tr>";

                    echo "<td>" . $p->getNroDNI() . "</td>";
                    echo "<td>" . $p->getApellido() . "</td>";
                    echo "<td>" . $p->getNombre() . "</td>";
                    echo "<td>" . $p->getFechaNac() . "</td>";
                    echo "<td>" . $p->getTelefono() . "</td>";
                    echo "<td>" . $p->getDomicilio() . "</td>";

                    echo "</tr>";
                }
            ?>
        </table>
    </div>
<style>
table, th, td {
  border: 1px solid black;
}
td {
  padding: 5px 25px;
}
</style>
</body>
</html>