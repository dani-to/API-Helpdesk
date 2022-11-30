<?php 
include_once"../control/controlcliente.php";
$params=[
	"id_cliente"=>"1",
	"nombre"=>"carlos",
	"a_paterno"=>"lopez",
	"a_materno"=>"perez"
];
$result=insertCliente($params);
echo $result;
