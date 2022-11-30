<?php
include_once "conexion.php";
class TELEFONO extends CONEXION{
    private $id_cliente;
    private $telefono;
  
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

    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    public function queryconsultaTelefono(){
        $query="SELECT `id_cliente`, `tel` FROM `telefonos`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertTelefono{
        $query="INSERT into `telefonos`(`id_cliente`, `tel`) 
        VALUES ('".$this->getIdCliente()."', '".$this->getTelefono()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}