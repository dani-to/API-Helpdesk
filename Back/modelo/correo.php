<?php
include_once "conexion.php";
class CORREO extends CONEXION{
    private $id_cliente;
    private $correo;
  
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

    public function getCorreo()
    {
        return $this->correo;
    }
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    public function queryconsultaCorreo(){
        $query="SELECT `id_cliente`, `correo` FROM `correos`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertCorreo{
        $query="INSERT into `correos`(`id_cliente`, `correo`) 
        VALUES ('".$this->getIdCliente()."', '".$this->getCorreo()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
}