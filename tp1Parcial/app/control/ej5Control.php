<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
 *               “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
 *               estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
 *               apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
 *               un mensaje que indique el tipo de estudios que posee y su sexo.
 */

 class ej5Control
 {
    public function obtener_cadena($datos)
    {
        $resultado = "ERROR: Uno o más valores son incorrectos.";

        if($datos >= 4)
        {
            $valor = "menor";
            if ($datos["edad"] >= 18)
                $valor = "mayor";

            $resultado = "Hola, mi nombre es " . $datos["nombre"] . ", " . $datos["apellido"] 
                       . " y soy <b>". $datos["genero"] ."</b>, vivo en " . $datos["direccion"] 
                       . " y soy " . $valor . " de edad con " . $datos["edad"] . " años."
                       . "<br>Estudios: <b>" . $datos["educacion"] . "</b>";

        }

        return $resultado;
    }
 }
?>