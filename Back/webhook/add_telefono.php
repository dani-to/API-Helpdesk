<?php
include_once"../control/controltelefono.php";
$params=[
  "id_cliente"=>"1",
  "telefono"=>"5536980291"
  ];
$result=inserttelefono($params);
echo $result;
?>