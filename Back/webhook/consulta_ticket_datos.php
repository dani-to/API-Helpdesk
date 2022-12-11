<?php 
include_once"../control/controlticket.php";
$folio = $_GET['folio'];
$result=consultaTicketDatos($folio);
echo $result;

//echo isset($_GET);