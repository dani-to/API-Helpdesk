<?php 
include_once"../control/controlticket.php";
$folio = $_POST['folio'];
$result=consultaTicketCorreo($folio);
echo $result;