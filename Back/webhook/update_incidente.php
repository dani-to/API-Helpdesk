<?php 
include_once"../control/controlincidente.php";
$params=[
    "id_incidente" =>$_POST['id'],
    "nivel_prioridad" =>$_POST['prioridad'],
    "proceso_solucion" =>$_POST['proceso'],
    "solucion" =>$_POST['solucion']
  ];
$result=updateIncidente($params);
echo $result;