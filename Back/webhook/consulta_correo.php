<?php 
include_once"../control/controlcorreo.php";
$id_cliente = '1';
$result=consultaCorreo($id_cliente);
echo $result;