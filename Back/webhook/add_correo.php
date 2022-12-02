<?php
include_once"../control/controlcorreo.php";
$params=[
  "id_cliente"=>$_POST['id_cliente'],
  "correo"=>$_POST['correo']
  ];
$result=insertcorreo($params);
echo $result;
?>