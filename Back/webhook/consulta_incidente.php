<?php 
include_once"../control/controlincidente.php";
$id_incidente = '1';
$result=consultaIncidente($id_incidente);
echo $result;