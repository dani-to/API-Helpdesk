<?php
include_once "conexion.php";
class CLIENTE extends CONEXION{
    private $id_cliente;
    private $nombre;
    private $a_paterno;
    private $a_materno;
  
    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }
    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente): void
    {
        $this->id_cliente = $id_cliente;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApaterno()
    {
        return $this->a_paterno;
    }
    public function setApaterno($a_paterno): void
    {
        $this->a_paterno = $a_paterno;
    }

    public function getAmaterno()
    {
        return $this->a_materno;
    }
    public function setAmaterno($a_materno): void
    {
        $this->a_materno = $a_materno;
    }
    
    public function queryconsultaCliente(){
        $query="SELECT `id_clientes`, `nombre`, `a_paterno`, `a_materno` FROM `clientes`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertCliente(){       // funcion insertar
        $query="INSERT into `clientes`(`nombre`, `a_paterno`, `a_materno`)  
        VALUES ('".$this->getNombre()."', '".$this->getApaterno()."', '".$this->getAmaterno()."')";
            //estas 2 lineas anteriores son la query a ejecutar, la primera parte es lo que esta en base de datos y la segunda es lo que enviamos, pero para eso en el anterior lo enviamos a set (recibe) y aqui lo mandamos con get (envia a base de datos)
        $this->connect();  //conexion a base de datos
        $resultado= $this->executeInstruction($query);  //ejecuta query y recibe resultado
        $this->close();                                 //cierra conexion a base de datos 
        return $resultado;                              //regresa respuesta a control
    }

    public function queryconsultaClienteId(){
        $query="SELECT id_clientes FROM clientes ORDER BY id_clientes DESC LIMIT 1";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
}