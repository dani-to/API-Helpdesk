<?php
function consultaCliente(){
    include_once "../modelo/cliente.php";
    $CLIENTE = new CLIENTE();
    $result = $CLIENTE->queryConsultaCliente();
   return json_encode($result);
}

function insertCliente($params){
    include_once "../modelo/cliente.php";
    $CLIENTE = new CLIENTE();
    $CLIENTE ->setNombre($params['nombre']);
    $CLIENTE ->setApaterno($params['a_paterno']);
    $CLIENTE ->setAmaterno($params['a_materno']);
    return $CLIENTE->queryInsertCliente();
}