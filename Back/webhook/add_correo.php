<?php
include_once"../control/controlcorreo.php";
$params=[
  "id_cliente"=>"1",
  "correo"=>"naye@hotmail.com"
  ];
$result=insertcorreos($params);
echo $result;
