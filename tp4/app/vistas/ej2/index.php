<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 21/10/2020
 * Descripcion:  Crear la capa de control, que nos permitan acceder al ORM (Modelo de datos) y entregarle la
 *               informacion a las paginas de la interface. 
 */

include_once('../../modelos/Auto.php');
include_once('../../modelos/Persona.php');
include_once('../../controladores/PersonaControl.php');

$autos = Auto::listar();
$personas = Persona::listar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <div>
        <h1>PERSONA</h1>
        <div>
            <table style="width: 50%">
                <tr>
                    <th>NroDNI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                    <th></th>
                    <th></th>
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
                        echo '<td><a href="accion.php?accion=modificar&nroDni=' . $p->getNroDNI() . '">Modificar</a></td>';
                        echo '<td><a href="accion.php?accion=eliminar&nroDni=' . $p->getNroDNI() . '">Eliminar</a></td>';

                        echo "</tr>";
                    }
                ?>
            </table>
            <br>
            <form action="accion.php" method="get">
                    <input type="text" name="nroDni" placeholder="Nro DNI">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <br>
                    <input type="text" name="fechaNac" placeholder="Fecha Nacimiento">
                    <input type="text" name="telefono" placeholder="Teléfono">
                    <input type="text" name="domicilio" placeholder="Domicilio">
                    <input type="hidden" name="accion" value="alta">
                    <input type="submit" value="Cargar">
            </form>
        </div>
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