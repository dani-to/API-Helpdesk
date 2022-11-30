<?php
function consultaTicket(){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    $result = $TICKET->queryConsultaTicket();
   return json_encode($result);
}

function insertTicket(){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    return $TICKET->queryInsertTicket();
}

function updateTicket(){
    include_once "../modelo/ticket.php";
    $TICKET = new TICKET();
    return $TICKET->queryUpdateTicket();
}