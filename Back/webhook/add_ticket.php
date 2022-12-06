<?php
include_once"../control/controlticket.php";
$params=[
    "id_empleado" =>'1',
    "id_cliente" =>$_POST['id_cliente'],
    "id_incidente" =>$_POST['id_incidente'],
    "id_venta" =>'1',
    "producto" =>$_POST['producto'],
    "descripcion" =>$_POST['descripcion'],
    "estatus" =>'0',
    "imagen" =>'2.png'
  ];
$result=insertTicket($params);
echo $result;
?>