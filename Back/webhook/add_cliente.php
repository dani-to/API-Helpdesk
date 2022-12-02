<?php 
include_once"../control/controlcliente.php";
$params=[
	"nombre"=>$_POST['nombre'],
	"a_paterno"=>$_POST['apaterno'],
	"a_materno"=>$_POST['amaterno']
];
$result=insertCliente($params);
echo $result;
