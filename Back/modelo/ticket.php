<?php
include_once "conexion.php";
class TICKET extends CONEXION{
    private $folio;
    private $id_empleado;
    private $id_cliente;
    private $id_incidente;
    private $id_venta;
    private $producto;
    private $descripcion;
    private $imagen;
    private $estatus;
  
    /**
     * @return mixed
     */
    public function getFolio()
    {
        return $this->folio;
    }
    /**
     * @param mixed $folio
     */
    public function setFolio($folio): void
    {
        $this->folio = $folio;
    }

    public function getIdEmpleado()
    {
        return $this->id_empleado;
    }
    public function setIdEmpleado($id_empleado): void
    {
        $this->id_empleado = $id_empleado;
    }

    public function getIdCliente()
    {
        return $this->id_cliente;
    }
    public function setIdCliente($id_cliente): void
    {
        $this->id_cliente = $id_cliente;
    }

    public function getIdIncidente()
    {
        return $this->id_incidente;
    }
    public function setIdIncidente($id_incidente): void
    {
        $this->id_incidente = $id_incidente;
    }

    public function getIdVenta()
    {
        return $this->id_venta;
    }
    public function setIdVenta($id_venta): void
    {
        $this->id_venta = $id_venta;
    }

    public function getProducto()
    {
        return $this->producto;
    }
    public function setProducto($producto): void
    {
        $this->producto = $producto;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    
    public function getImagen()
    {
        return $this->imagen;
    }
    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }

    public function getEstatus()
    {
        return $this->estatus;
    }
    public function setEstatus($estatus): void
    {
        $this->estatus = $estatus;
    }

    public function queryconsultaTicket(){
        //Modificado
        $query="SELECT tk.folio, tk.fecha_creacion, tk.id_empleado, tk.id_cliente, tk.id_incidente, tk.id_venta, tk.descripcion, tk.imagen, tk.estatus, tk.fecha_edicion, tk.fecha_solucion, ic.id_incidente, ic.nivel_prioridad, ic.tipo_problema FROM tickets tk, incidentes ic WHERE tk.id_incidente = ic.id_incidente";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertTicket(){
        $query="INSERT into `tickets`(`fecha_creacion`, `id_empleado`, `id_cliente`, `id_incidente`, `id_venta`, `nombre_producto`, `descripcion`, `imagen`, `estatus`, `fecha_edicion`) 
        VALUES (current_timestamp(), '".$this->getIdEmpleado()."', '".$this->getIdCliente()."', '".$this->getIdIncidente()."', '".$this->getIdVenta()."', '".$this->getProducto()."', '".$this->getDescripcion()."', '".$this->getImagen()."', '".$this->getEstatus()."', current_timestamp())";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateTicket(){
        $query="UPDATE `tickets` SET `id_empleado` = '".$this->getIdEmpleado()."', `fecha_edicion` = current_timestamp(), `fecha_solucion` = current_timestamp(), `estatus` ='".$this->getEstatus()."' WHERE `tickets`.`id_asignatura` = '".$this->getIdAsignatura()."'";
        //retrun $query;
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaTicketId(){
        $query="SELECT folio FROM tickets ORDER BY folio DESC LIMIT 1";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
}