<?php
include_once"../control/controltelefono.php";
$params=[
  "id_cliente"=>$_POST['id_cliente'],
  "telefono"=>$_POST['telefono']
  ];
$result=inserttelefono($params);
echo $result;
?>