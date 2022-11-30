<?php
function consultaCorreo(){
    include_once "../modelo/correo.php";
    $CORREO = new CORREO();
    $result = $CORREO->queryConsultaCorreo();
   return json_encode($result);
}

function insertCorreo(){
    include_once "../modelo/correo.php";
    $CORREO = new CORREO();
    return $CORREO->queryInsertCorreo();
}