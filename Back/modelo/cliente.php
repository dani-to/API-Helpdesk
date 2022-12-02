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

    public function queryInsertCliente(){
        $query="INSERT into `clientes`(`id_clientes`, `nombre`, `a_paterno`, `a_materno`) 
        VALUES ('".$this->getNombre()."', '".$this->getApaterno()."', '".$this->getAmaterno()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}