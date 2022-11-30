<?php
function consultaIncidente(){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    $result = $INCIDENTE->queryConsultaIncidente();
   return json_encode($result);
}

function insertIncidente(){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    return $INCIDENTE->queryInsertIncidente();
}

function updateIncidente(){
    include_once "../modelo/incidente.php";
    $INCIDENTE = new INCIDENTE();
    return $INCIDENTE->queryUpdateIncidente();
}