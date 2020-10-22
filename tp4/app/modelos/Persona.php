<?php
/**
 * Alumno: Ezequiel Vera
 * Legajo: FAI-2172
 * Fecha: 21/10/2020
 * Descripcion:  Crear la capa de los datos, implementando el ORM (Modelo de datos) para la base de datos
 *               entregada. Recordar que se debe generar al menos, un clase php por cada tabla. Cada clase debe contener
 *               las variables de instancia y sus metodos get y set; ademas de los metodos que nos permitan seleccionar,
 *               ingresar, modificar y eliminar los datos de cada tabla. 
 */

include_once('conector/BaseDatos.php');
class Persona
{
    private $nroDni;    // varchar(10) PRIMARY KEY
    private $apellido;  // varchar(50)
    private $nombre;    // varchar(50)
    private $fechaNac;  // date	
    private $telefono;  // varchar(20)
    private $domicilio; // varchar(200)
    
    public function __construct()
    {
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
    }

    /**
     * Cargar datos al objetos
     */
    public function cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }


    /**
     * Función para buscar datos desde la base de datos según un id dado
     * @param int $id
     * 
     * @return boolean
     */
    public function buscar($nroDni)
    {
        $bd = new BaseDatos();
		$query = "SELECT * from persona where NroDni=".$nroDni;
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
				    $this->setNroDni($nroDni);
					$this->setApellido($row2['Apellido']);
					$this->setNombre($row2['Nombre']);
					$this->setFechaNac($row2['fechaNac']);
					$this->setTelefono($row2['Telefono']);
					$this->setDomicilio($row2['Domicilio']);
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
     * @param string $order
     * @return array
     */
    public static function listar($where="", $order="Apellido")
    {
	    $Personas = null;
		$bd = new BaseDatos();
        $query = "Select * from persona";
        
		if ($where != "")
            $query = $query.' where '.$where;
        
        $query.=" order by ".$order;
        
        
        // Iniciamos conexión con bd
        if($bd->Iniciar())
        {
            // Ejecutamos la consulta
            if($bd->Ejecutar($query))
            {				
				$Personas = array();
                while($row2 = $bd->Registro())
                {
				    $nroDni = $row2['NroDni'];
					$apellido = $row2['Apellido'];
					$nombre = $row2['Nombre'];
					$fechaNac = $row2['fechaNac'];
					$telefono = $row2['Telefono'];
					$domicilio = $row2['Domicilio'];
                
                    // Creamos el nuevo objeto Auto con los datos obtenidos
					$tmp_persona = new Persona();
                    $tmp_persona->cargar($nroDni,$apellido,$nombre,$fechaNac,$telefono,$domicilio);
                    // Agregamos al arreglo
					array_push($Personas,$tmp_persona);
				}
            } else
            {
		 		$Personas = $bd->getError();
			}
        } else
        {
            $Personas = $bd->getError();
        }

		return $Personas;
	}	

    /**
     * Funcion para insertar los datos del objeto a la base de datos
     * @return boolean
     */
    public function insertar()
    {
		$bd     = new BaseDatos();
		$output = false;
		$query  = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) 
				   VALUES ('".$this->getNroDni()."','".$this->getApellido()."','".$this->getNombre()."','".$this->getFechaNac()."','".$this->getTelefono()."','".$this->getDomicilio()."')";
        
        // Iniciamos conexión
        if($bd->Iniciar())
        {
            // Ejecutamos consulta
            if($nroDni = $bd->Ejecutar($query))
            {
                $this->setNroDni($nroDni);
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
		$query = "UPDATE persona SET NroDni='".$this->getNroDni()."',Apellido='".$this->getApellido()
               ."',Nombre='".$this->getNombre()."',fechaNac=". $this->getFechaNac()
               ."',Telefono=". $this->getTelefono()."',Domicilio=". $this->getDomicilio()." WHERE NroDni".$this->getNroDni();

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
     * Con ésta función eliminamos una tupla según la NroDni dada.
     * @return boolean
     */
    public function eliminar(){
		$bd = new BaseDatos();
        $output = false;
        
        // Iniciamos conexión
        if($bd->Iniciar())
        {
            $query = "DELETE FROM persona WHERE NroDni=".$this->getNroDni();

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
    public function getNroDni()
    {
        return $this->nroDni;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }

    public function setNroDni($data)
    {
        $this->nroDni = $data;
    }
    public function setApellido($data)
    {
        $this->apellido = $data;
    }
    public function setNombre($data)
    {
        $this->nombre = $data;
    }
    public function setFechaNac($data)
    {
        $this->fechaNac = $data;
    }
    public function setTelefono($data)
    {
        $this->telefono = $data;
    }
    public function setDomicilio($data)
    {
        $this->domicilio = $data;
    }
    public function setMensajeOperacion($data)
    {
        $this->mensajeOperacion = $data;
    }

    public function __toString()
    {
        return "OBJ Persona: "
           . "\n- NroDni: " . $this->getNroDni()
           . "\n- Apellido: " . $this->getApellido()
           . "\n- Nombre: " . $this->getNombre()
           . "\n- Fecha Nacimiento: " . $this->getFechaNac()
           . "\n- Teléfono: " . $this->getTelefono()
           . "\n- Domicilio: " . $this->getDomicilio();
    }
}