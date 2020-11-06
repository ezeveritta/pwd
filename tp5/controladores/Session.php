<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 21:20
 * Descripción: Implementar dentro de la capa de Control la clase Session con los siguientes métodos:
 *                  ++• _ _construct(). Constructor que. Inicia la sesión.
 *                  ++• iniciar($nombreUsuario,$psw). Actualiza las variables de sesión con los valores ingresados.
 *                  ++• validar(). Valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false.
 *                  ++• activa(). Devuelve true o false si la sesión está activa o no.
 *                  ++• getUsuario().Devuelve el usuario logeado.
 *                  ??• getRol(). Devuelve el rol del usuario logeado.
 *                  ++• cerrar(). Cierra la sesión actual.
 */

class SessionControl
{
    private $nombreUsuario;
    private $contraseña;
    private $error;

    public function __construct()
    {
        if (!isset($_SESSION))
        {
            $this->iniciar_session();
        }
    }

    /**
     * Cierra la sesión actual.
     */
    public static function cerrar()
    {
        if (SessionControl::activa() == 2)
            return session_destroy();
    }


    /**
     * Devuelve el rol del usuario logeado.
     * @return array
     */
    public function get_rol()
    {
        $idusuario = "'{$this->get_usuario()->get_id()}'";
        $objUsuarioRol = new UsuarioRol();
        $arregloRoles = UsuarioRol::listar("idusuario=$idusuario");
        return $arregloRoles;
    }


    /**
     * Devuelve el usuario logeado
     * @return Usuario
     */
    public function get_usuario()
    {
        $objUsuario = new Usuario();
        $objUsuario->buscar($this->get_nombreUsuario(), 'usnombre');
        return $objUsuario;
    }

    /**
     * Devuelve true o false si la sesión está activa o no.
     * @return boolean
     */
    public static function activa()
    {
        return session_status();
    }

    /**
     * Ésta función valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false.
     * @return boolean
     */
    public function validar()
    {
        if (!isset($_SESSION['nombreUsuario']) || !isset($_SESSION['contraseña']))
            return false;
            
        return Usuario::validar_session($this->get_nombreUsuario(), $this->get_contraseña());
    }


    /**
     * Ésta función actualiza las variables de sesión con los valores ingresados.
     * @param string $nombreUsuario
     * @param string $contraseña
     * @return boolean
     */
    public function iniciar($nombreUsuario, $contraseña)
    {
        if (!isset($_SESSION))
        {
            $this->set_error("Sesion no iniciada.");
            return false;
        }

        $this->set_nombreUsuario($nombreUsuario);
        $this->set_contraseña($contraseña);
        return true;
    }

    /**
     * Ésta función inicia la variable global SESSION. sin valores.
     */
    private function iniciar_session()
    {
        session_start();
    }
    public function get_nombreUsuario() { return $_SESSION['nombreUsuario']; }
    public function get_contraseña() { return $_SESSION['contraseña']; }
    public function get_error() { return $this->error; }

    public function set_nombreUsuario($data) { $_SESSION['nombreUsuario'] = $data; }
    public function set_contraseña($data) { $_SESSION['contraseña'] = $data; }
    public function set_error($data) { $this->error = $data; }

    public function __toString()
    {
        return "<br> Objeto Control: 
                <br> NombreUsuario: {$this->get_nombreUsuario()}
                <br> Contraseña: {$this->get_contraseña()}
                <br> error: {$this->get_error()}";
    }
}