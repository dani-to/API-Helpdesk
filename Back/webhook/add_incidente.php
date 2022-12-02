<?php
include_once"../control/controlincidente.php";
$tipo = $_POST['tipo'];
$result=insertincidente($tipo);
echo $result;
?>