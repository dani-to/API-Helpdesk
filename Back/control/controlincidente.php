<?php
function consultaIncidente($id_incidente){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $INCIDENTE -> setIdIncidente($id_incidente);
    $result = $INCIDENTE->queryConsultaIncidente();
   return json_encode($result);
}

function insertIncidente($tipo){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $INCIDENTE -> setTipoProblema($tipo);
    return $INCIDENTE->queryInsertIncidente();
}

function updateIncidente($params){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $INCIDENTE -> setIdIncidente($params['id_incidente']);
    $INCIDENTE -> setNivelPrioridad($params['nivel_prioridad']);
    $INCIDENTE -> setProcesoSolucion($params['proceso_solucion']);
    $INCIDENTE -> setSolucion($params['solucion']);
    return $INCIDENTE->queryUpdateIncidente();
}

function consultaIncidenteId(){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $result = $INCIDENTE->queryConsultaIncidenteId();
   return json_encode($result);
}