<?php 
include_once"../control/controlcliente.php";
$id_cliente = '1';
$result=consultaCliente($id_cliente);
echo $result;