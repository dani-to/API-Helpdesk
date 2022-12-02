<?php
include_once"../control/controlincidente.php";
$params=[
    "id_incidente" =>'1',
    "nivel_prioridad" =>'1',
    "tipo_problema" =>'Mantenimiento',
    "proceso_solucion" =>'paso 1....paso 10',
    "solucion" =>'Cambio de pasta termica'
  ];
$result=insertincidente($params);
echo $result;
?>