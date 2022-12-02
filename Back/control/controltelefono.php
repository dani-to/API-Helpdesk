<?php
function consultaTelefono($id_cliente){
    include_once "../modelo/telefono.php";
    $TELEFONO = new TELEFONO();
    $TELEFONO ->setIdCliente($id_cliente);
    $result = $TELEFONO->queryConsultaTelefono();
   return json_encode($result);
}

function insertTelefono($params){
    include_once "../modelo/telefono.php";
    $TELEFONO = new TELEFONO();
    $TELEFONO ->setTelefono($params['telefono']);
    $TELEFONO ->setIdCliente($params['id_cliente']);
    return $TELEFONO->queryInsertTelefono();
}
