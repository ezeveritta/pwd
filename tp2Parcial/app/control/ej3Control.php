<?php 
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 22/09/2020
 * Descripción: Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo 
 *              esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su contenido en un textarea.
 */

 /**Los datos del formulario son enviados a un script
    verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
    arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
    de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
    y en caso contrario un mensaje de error. */

 class ej3Control
 {
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = [
            ["usuario" => "user1", "clave" => "12345678"],
            ["usuario" => "admin", "clave" => "admin"]
        ];
    }

    public function verificarUsuario($datos)
    {
        $resultado = "Usuario y contraseña no encontrados.";
        $usuarios = $this->get_usuarios();

        foreach ($usuarios as $user)
        {
            if ($user["usuario"] == $datos["username"] && $user["clave"] == $datos["password"])
            {
                $resultado = true;
            }
        }

        return $resultado;
    }

    public function get_usuarios()
    {
        return $this->usuarios;
    }
 }
?>