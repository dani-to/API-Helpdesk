<?php
function consultaIncidente($id_incidente){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $INCIDENTE -> setIdIncidente($id_incidente);
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

function updateIncidente($params){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $INCIDENTE -> setIdIncidente($params['id_incidente']);
    $INCIDENTE -> setNivelPrioridad($params['nivel_prioridad']);
    $INCIDENTE -> setTipoProblema($params['tipo_problema']);
    $INCIDENTE -> setProcesoSolucion($params['proceso_solucion']);
    $INCIDENTE -> setSolucion($params['solucion']);
    return $INCIDENTE->queryUpdateIncidente();
}