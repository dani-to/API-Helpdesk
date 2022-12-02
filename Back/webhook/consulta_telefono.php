<?php 
include_once"../control/controltelefono.php";
$id_cliente = '1';
$result=consultaTelefono($id_cliente);
echo $result;