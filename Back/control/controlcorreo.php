<?php
function consultaCorreo($id_cliente){
    include_once "../modelo/correo.php";
    $CORREO = new CORREO();
    $CORREO ->setIdCliente($id_cliente);
    $result = $CORREO->queryConsultaCorreo();
   return json_encode($result);
}

function insertCorreo($params){
    include_once "../modelo/correo.php";
    $CORREO = new CORREO();
    $CORREO ->setCorreo($params['correo']);
    $CORREO ->setIdCliente($params['id_cliente']);
    return $CORREO->queryInsertCorreo();
}