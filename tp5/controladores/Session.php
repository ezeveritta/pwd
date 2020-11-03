<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 21:20
 * Descripción: Implementar dentro de la capa de Control la clase Session con los siguientes métodos:
 *                  • _ _construct(). Constructor que. Inicia la sesión.
 *                  • iniciar($nombreUsuario,$psw). Actualiza las variables de sesión con los valores ingresados.
 *                  • validar(). Valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false.
 *                  • activa(). Devuelve true o false si la sesión está activa o no.
 *                  • getUsuario().Devuelve el usuario logeado.
 *                  • getRol(). Devuelve el rol del usuario logeado.
 *                  • cerrar(). Cierra la sesión actual.
 */

class Session
{
    private $instanciaA;
    private $instanciaB;
    private $error;

    public function __construct()
    {
        $this->instanciaA = '';
        $this->instanciaB = '';
        $this->error = '';
    }

    public function get_instanciaA() { return $this->instanciaA; }
    public function get_instanciaB() { return $this->instanciaB; }
    public function get_error() { return $this->error; }

    public function set_instanciaA($data) { $this->instanciaA = $data; }
    public function set_instanciaB($data) { $this->instanciaB = $data; }
    public function set_error($data) { $this->error = $data; }

    public function __toString()
    {
        return "<br> Objeto Control: 
                <br> instanciaA: {$this->get_instanciaA()}
                <br> instanciaB: {$this->get_instanciaB()}
                <br> error: {$this->get_error()}";
    }
}