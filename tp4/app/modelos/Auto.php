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

include_once('conector/BaseDatos.php');
class Auto
{
    private $patente;   // varchar(10) KEY
    private $marca;     // varchar(50)
    private $modelo;    // int(11)
    private $dniDuenio; // varchar(10)	
    private $mensajeoperacion;
    
    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = 0;
        $this->dniDuenio = "";
    }

    /**
     * Cargar datos al objetos
     */
    public function cargar($patente, $marca, $modelo, $dniDuenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }


    /**
     * Función para buscar datos desde la base de datos según un id dado
     * @param int $id
     * 
     * @return boolean
     */
    public function buscar($patente)
    {
        $bd = new BaseDatos();
		$query = "SELECT * from auto where patente=".$patente;
        $output = false;
        
        // Inicio conexión con bd
        if($bd->Iniciar())
        {
            // Ejecuto la consulta
            if($db->Ejecutar($query))
            {
                // Recupero la información
                if($row2 = $bd->Registro())
                {
				    $this->setPatente($patente);
					$this->setMarca($row2['Marca']);
					$this->setModel($row2['Modelo']);
					$this->setDniDuenio($row2['DniDuenio']);
					$output= true;
				}				
			
            } else
            {
		 		$this->setMensajeOperacion($bd->getError());
			}
        } else
        {
		 	$this->setMensajeOperacion($bd->getError());
		}
		return $output;
    }

    /**
     * Retornar toda la información de la base de datos
     * @param string $where
     * 
     * @return array
     */
    public static function listar($where="")
    {
	    $Autos = null;
		$bd = new BaseDatos();
        $query = "Select * from auto";
        
		if ($where != "")
            $query = $query.' where '.$where;
        
        $query.=" order by marca ";
        
        echo $query; // debug
        
        // Iniciamos conexión con bd
        if($bd->Iniciar())
        {
            // Ejecutamos la consulta
            if($bd->Ejecutar($query))
            {				
				$Autos = array();
                while($row2 = $bd->Registro())
                {
				    $patente = $row2['Patente'];
					$marca = $row2['Marca'];
					$modelo = $row2['Modelo'];
					$dniDuenio = $row2['DniDuenio'];
                
                    // Creamos el nuevo objeto Auto con los datos obtenidos
					$tmp_auto = new Auto();
                    $tmp_auto->cargar($patente,$marca,$modelo,$dniDuenio);
                    // Agregamos al arreglo
					array_push($Autos,$tmp_auto);
				}
            } else
            {
		 		$Autos = $bd->getError();
			}
        } else
        {
            $Autos = $bd->getError();
        }

		return $Autos;
	}	

    /**
     * Funcion para insertar los datos del objeto a la base de datos
     * @return boolean
     */
    public function insertar()
    {
		$bd     = new BaseDatos();
		$output = false;
		$query  = "INSERT INTO auto(marca, modelo, dniDuenio) 
				   VALUES (".$this->getMarca()."','".$this->getModelo()."','".$this->getDniDuenio()."')";
        
        // Iniciamos conexión
        if($bd->Iniciar())
        {
            // Ejecutamos consulta
            if($patente = $bd->devuelveIDInsercion($query))
            {
                $this->setPatente($patente);
			    $output = true;
            } else
            {
				$this->setMensajeOperacion($bd->getError());
			}

        } else
        {
			$this->setMensajeOperacion($bd->getError());
        }
        
		return $output;
    }
    
    /**
     * Esta función modifica los datos de la bd según las variables instancias
     * @return boolean
     */
    public function modificar(){
	    $output = false; 
	    $bd = new BaseDatos();
		$query = "UPDATE auto SET Patente='".$this->getPatente()."',Marca='".$this->getMarca()
               ."',Modelo='".$this->getModelo()."',DniDuenio=". $this->getDniDuenio()." WHERE Patente".$this->getPatente();

        // Iniciamos conexión
        if($bd->Iniciar())
        {
            // Ejecutamos consulta
            if($bd->Ejecutar($query))
            {
			    $output = true;
            } else
            {
				$this->setMensajeOperacion($bd->getError());
			}
        } else
        {
			$this->setMensajeOperacion($bd->getError());
        }
        
		return $output;
	}

    /**
     * Con ésta función eliminamos una tupla según la patente dada.
     * @return boolean
     */
    public function eliminar(){
		$bd = new BaseDatos();
        $output = false;
        
        // Iniciamos conexión
        if($bd->Iniciar())
        {
            $query = "DELETE FROM auto WHERE patente=".$this->getPatente();

            // Ejecutamos consulta
            if($bd->Ejecutar($query))
            {
                $output = true;
            } else
            {
                $this->setMensajeOperacion($bd->getError());
            }
        } else
        {
			$this->setMensajeOperacion($bd->getError());
        }
        
		return $output; 
	}


    // Metodos de Acceso
    public function getPatente()
    {
        return $this->patente;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getDniDuenio()
    {
        return $this->dniDuenio;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }

    public function setPatente($data)
    {
        $this->patente = $data;
    }
    public function setMarca($data)
    {
        $this->marca = $data;
    }
    public function setModelo($data)
    {
        $this->modelo = $data;
    }
    public function setDniDuenio($data)
    {
        $this->dniDuenio = $data;
    }
    public function setMensajeOperacion($data)
    {
        $this->mensajeOperacion = $data;
    }

    public function __toString()
    {
        return "OBJ Auto: "
           . "\n- Patente: " . $this->getPatente()
           . "\n- Marca: " . $this->getMarca()
           . "\n- Modelo: " . $this->getModelo()
           . "\n- Dni del propietario: " . $this->getDniDuenio();
    }
}