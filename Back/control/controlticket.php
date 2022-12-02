<?php
function consultaTicket(){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $result = $TICKET->queryConsultaTicket();
   return json_encode($result);
}

function insertTicket($params){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $TICKET -> setFolio($params['folio']);
    $TICKET -> setIdEmpleado($params['id_empleado']);
    $TICKET -> setIdCliente($params['id_cliente']);
    $TICKET -> setIdIncidente($params['id_incidente']);
    $TICKET -> setIdVenta($params['id_venta']);
    $TICKET -> setDescripcion($params['descripcion']);
    $TICKET -> setEstatus($params['estatus']);
    $TICKET -> setImagen($params['imagen']);
    return $TICKET->queryInsertTicket();
}

function updateTicket(){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    return $TICKET->queryUpdateTicket();
}