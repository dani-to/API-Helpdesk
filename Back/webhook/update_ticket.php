<?php
include_once"../control/controlticket.php";
$params=[
    "folio" =>'1',
    "estatus" =>'1'
  ];
$result=updateTicket($params);
echo $result;
?>