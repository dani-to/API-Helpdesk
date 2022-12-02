<?php
include_once"../control/controlticket.php";
$params=[
    "folio" =>'1',
    "id_empleado" =>'1',
    "id_cliente" =>'1',
    "id_incidente" =>'1',
    "id_venta" =>'1',
    "descripcion" =>'no prende',
    "estatus" =>'1',
    "imagen" =>'imagen.png'
  ];
$result=insertTicket($params);
echo $result;
?>