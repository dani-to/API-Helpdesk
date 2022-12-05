<?php
function consultaTicket($folio){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $TICKET -> setFolio($folio);
    $result = $TICKET->queryConsultaTicket();
   return json_encode($result);
}

function insertTicket($params){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $TICKET -> setIdEmpleado($params['id_empleado']);
    $TICKET -> setIdCliente($params['id_cliente']);
    $TICKET -> setIdIncidente($params['id_incidente']);
    $TICKET -> setIdVenta($params['id_venta']);
    $TICKET -> setDescripcion($params['descripcion']);
    $TICKET -> setEstatus($params['estatus']);
    $TICKET -> setImagen($params['imagen']);
    return $TICKET->queryInsertTicket();
}

function updateTicket($params){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $TICKET -> setFolio($params['folio']);
    $TICKET -> setEstatus($params['estatus']);
    return $TICKET->queryUpdateTicket();
}

function consultaTicketId(){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $result = $TICKET->queryConsultaTicket();
   return json_encode($result);
}