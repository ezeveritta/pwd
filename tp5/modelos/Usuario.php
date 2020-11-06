<?php

/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha : 02-11-2020 21:20
 * Descripción:
 */

class Usuario
{
    private $id;
    private $nombre;
    private $pass;
    private $mail;
    private $deshabilitado;
    private $error;

    public function __construct()
    {
        $this->id = '';
        $this->nombre = '';
        $this->pass = '';
        $this->mail = '';
        $this->deshabilitado = '';
        $this->error = '';
    }

    /**
     * Ésta función carga datos a las variables instancias del objeto.
     * @param string $nombre           : Nombre del usuario
     * @param string $pass             : Contraseña
     * @param string $mail             : Correo Electrónico
     * @param string $deshabilitado    : Estado de la cuenta
     */
    public function cargar(string $nombre, string $pass, string $mail, string $deshabilitado)
    {
        $this->set_nombre($nombre);
        $this->set_pass($pass);
        $this->set_mail($mail);
        $this->set_deshabilitado($deshabilitado);
    }

    /**
     * Ésta función busca en la BD un registro y carga los datos en el objeto.
     * @param string $patente   : Identificador para encontrar el registro.
     * @param string $where     : Cambia el parámetro del 'where' en el sql.
     * @return boolean
     */
    public function buscar(string $valor, string $where = 'idusuario')
    {
        $Conexion = new BaseDatos();
        $consulta = "SELECT * FROM usuario WHERE $where='$valor'";

        // Inicio conexión con la BD
        if (!$Conexion->Iniciar()) {
            $this->set_error( $Conexion->getError() );
            return false;
        }

        // Ejecuto la consulta
        if (!$Conexion->Ejecutar($consulta)) {
            $this->set_error($Conexion->getError());
            return false;
        }

        // Recupero la información
        if ($row2 = $Conexion->Registro()) {
            $this->set_id($row2['idusuario']);
            $this->cargar($row2['usnombre'], $row2['uspass'], $row2['usmail'], $row2['usdeshabilitado']);
        }
        return true;
    }

    /**
     * Ésta función retorna un arreglo con los registros encontrados de la tabla Usuario.
     * @param string $where     : Permite agregar condiciones.
     * @param string $limite    : Permite limitar la cantidad de registros a obtener.
     * @param string $orden     : Valor para ordenar los registros.
     * @return mixed array|boolean|string
     */
    public static function listar(string $where ="", string $limite ="", string $orden = "idusuario")
    {
        $arregloUsuarios = null;
        $Conexion = new BaseDatos();
        $consulta = "SELECT * FROM usuario";

        if ($where != "")
            $consulta .= " WHERE = $where";
        if ($limite != "")
            $consulta .= " LIMIT = $limite";

        $consulta .= " ORDER BY $orden";

        // Iniciamos conexión con BD.
        if (!$Conexion->Iniciar()) {
            return $Conexion->getError();
        }

        // Ejecutamos la consulta.
        if (!$Conexion->Ejecutar($consulta)) {
            return $Conexion->getError();
        }

        // Retornamos la información obtenida.
        $arregloUsuarios = array();
        while ($row2 = $Conexion->Registro()) 
        {
            $id            = $row2['idusuario'];
            $nombre        = $row2['usnombre'];
            $pass          = $row2['uspass'];
            $mail          = $row2['usmail'];
            $deshabilitado = $row2['usdeshabilitado'];

            // Creamos el nuevo objeto Usuario con los datos obtenidos
            $tmp_usuario = new Usuario();
            $tmp_usuario->set_id($id);
            $tmp_usuario->cargar($nombre, $pass, $mail, $deshabilitado);
            // Agregamos al arreglo
            array_push($arregloUsuarios, $tmp_usuario);
        }

        return $arregloUsuarios;
    }

    /**
     * Éste método inserta un registro en la tabla usuario.
     * @return boolean
     */
    public function insertar()
    {
        $Conexion     = new BaseDatos();
        $consulta  = "INSERT INTO usuario(usnombre, uspass, usmail, usdeshabilitado) 
				   VALUES ('{$this->get_nombre()}', '{$this->get_pass()}', '{$this->get_mail()}', '{$this->get_deshabilitado()}')";

        // Iniciamos conexión
        if (!$Conexion->Iniciar()) {
            $this->set_error( $Conexion->getError() );
            return false;
        }
        // Ejecutamos consulta
        if ($id = $Conexion->Ejecutar($consulta)) {
            $this->set_id($id);
            $output = true;
        } else {
            $this->set_error( $Conexion->getError() );
            $output = false;
        }

        return $output;
    }


    /**
     * Esta función modifica los datos de la BD según las variables instancias
     * @return boolean
     */
    public function modificar()
    {
        $Conexion = new BaseDatos();
        $consulta = "UPDATE usuario SET usnombre = '{$this->get_nombre()}', 
                                        uspass = '{$this->get_pass()}',
                                        usmail = '{$this->get_mail()}',
                                        usdeshabilitado = '{$this->get_deshabilitado()}'
                                        WHERE idusuario = {$this->get_id()}";

        // Iniciamos conexión
        if (!$Conexion->Iniciar()) {
            $this->set_error( $Conexion->getError() );
            return false;
        }

        // Ejecutamos consulta
        if (!$Conexion->Ejecutar($consulta)) {
            $this->set_error($Conexion->getError());
            return false;
        }

        return true;
    }

    /**
     * Con ésta función eliminamos un registro según la variable idusuario.
     * @return boolean
     */
    public function eliminar()
    {
        $Conexion = new BaseDatos();

        // Iniciamos conexión
        if (!$Conexion->Iniciar()) {
            $this->set_error( $Conexion->getError() );
            return false;
        }

        $query = "DELETE FROM usuario WHERE idusuario = {$this->get_id()}";

        // Ejecutamos consulta
        if (!$Conexion->Ejecutar($query)) {
            $this->set_error($Conexion->getError());
            return false;
        }

        return true;
    }

    public static function validar_session(String $nombreUsuario, String $contraseña)
    {
        if (strlen($nombreUsuario) == 0 || strlen($contraseña) == 0)
        {
            return false;
        }

        $conexion = new BaseDatos();
        $consulta = "SELECT idusuario FROM usuario WHERE usnombre='$nombreUsuario' AND uspass='$contraseña' LIMIT 1";

        // Iniciamos conexión con la BD
        if (!$conexion->Iniciar())
        {
            return false;
        }

        // Ejecutamos la consulta
        if (!$conexion->Ejecutar($consulta))
        {
            return false;
        }

        // Verificamos si hay o no reguistro.
        $row2 = $conexion->Registro();
        return isset($row2['idusuario']);
    }

    // Métodos de acceso
    public function get_id() { return $this->id; }
    public function get_nombre() { return $this->nombre; }
    public function get_pass() { return $this->pass; }
    public function get_mail() { return $this->mail; }
    public function get_deshabilitado() { return $this->deshabilitado; }
    public function get_error() { return $this->error; }

    public function set_id($data) { $this->id = $data; }
    public function set_nombre($data) { $this->nombre = $data; }
    public function set_pass($data) { $this->pass = $data; }
    public function set_mail($data) { $this->mail = $data; }
    public function set_deshabilitado($data) { $this->deshabilitado = $data; }
    public function set_error($data) { $this->error = $data; }

    public function __toString()
    {
        return "<br><b> Objeto Usuario</b>: 
                <br><b> id</b>: {$this->get_id()}
                <br><b> nombre</b>: {$this->get_nombre()}
                <br><b> pass</b>: {$this->get_pass()}
                <br><b> mail</b>: {$this->get_mail()}
                <br><b> deshabilitado</b>: {$this->get_deshabilitado()}
                <br><b> error</b>: {$this->get_error()}";
    }
}
