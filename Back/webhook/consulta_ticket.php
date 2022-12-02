<?php 
include_once"../control/controlticket.php";
$folio = '1';
$result=consultaTicket($folio);
echo $result;