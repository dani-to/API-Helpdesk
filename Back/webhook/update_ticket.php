<?php
include_once"../control/controlticket.php";
$params=[
    "folio" =>$_POST['folio'],
    "id_empleado" =>$_POST['id_empleado'],
    "estatus" =>'1'
  ];
$result=updateTicket($params);
echo $result;
?>