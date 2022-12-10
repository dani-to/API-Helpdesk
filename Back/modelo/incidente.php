<?php
include_once "conexion.php";
class INCIDENTE extends CONEXION{
    private $id_incidente;
    private $nivel_prioridad;
    private $tipo_problema;
    private $proceso_solucion;
    private $solucion;
  
    /**
     * @return mixed
     */
    public function getIdIncidente()
    {
        return $this->id_incidente;
    }
    /**
     * @param mixed $id_incidente
     */
    public function setIdIncidente($id_incidente): void
    {
        $this->id_incidente = $id_incidente;
    }

    public function getNivelPrioridad()
    {
        return $this->nivel_prioridad;
    }
    public function setNivelPrioridad($nivel_prioridad): void
    {
        $this->nivel_prioridad = $nivel_prioridad;
    }

    public function getTipoProblema()
    {
        return $this->tipo_problema;
    }
    public function setTipoProblema($tipo_problema): void
    {
        $this->tipo_problema = $tipo_problema;
    }

    public function getProcesoSolucion()
    {
        return $this->proceso_solucion;
    }
    public function setProcesoSolucion($proceso_solucion): void
    {
        $this->proceso_solucion = $proceso_solucion;
    }

    public function getSolucion()
    {
        return $this->solucion;
    }
    public function setSolucion($solucion): void
    {
        $this->solucion = $solucion;
    }
    
    public function queryconsultaIncidente(){
        $query="SELECT `id_incidente`, `nivel_prioridad`, `tipo_problema`, `proceso_solucion` FROM `incidentes`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function queryInsertIncidente(){
        $query="INSERT into `incidentes`( `tipo_problema`) 
        VALUES ( '".$this->getTipoProblema()."')";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryUpdateIncidente(){
        $query="UPDATE `incidentes` SET `nivel_prioridad` = '".$this->getNivelPrioridad()."', `proceso_solucion` = '".$this->getProcesoSolucion()."', `solucion` = '".$this->getSolucion()."' WHERE `incidentes`.`id_incidente` = '".$this->getIdIncidente()."'";
        $this->connect();
        $resultado= $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function queryconsultaIncidenteId(){
        $query="SELECT id_incidente FROM incidentes ORDER BY id_incidente DESC LIMIT 1";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
}