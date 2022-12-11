<?php 
include_once"../control/controlticket.php";
$params=[
	"folio"=> $_POST['folio'],
	"correo"=> $_POST['correo'],
	"nombre"=>$_POST['nombre']
];
$result=consultaTicketCorreo($params);
echo $result;