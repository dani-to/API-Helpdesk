<?php
function consultaIncidente(){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $result = $INCIDENTE->queryConsultaIncidente();
   return json_encode($result);
}

function insertIncidente($params){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $INCIDENTE -> setIdIncidente($params['id_incidente']);
    $INCIDENTE -> setNivelPrioridad($params['nivel_prioridad']);
    $INCIDENTE -> setTipoProblema($params['tipo_problema']);
    $INCIDENTE -> setProcesoSolucion($params['proceso_solucion']);
    $INCIDENTE -> setSolucion($params['solucion']);
    return $INCIDENTE->queryInsertIncidente();
}

function updateIncidente(){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    return $INCIDENTE->queryUpdateIncidente();
}