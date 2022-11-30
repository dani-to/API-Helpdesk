<?php
function consultaTelefono(){
    include_once "../modelo/telefono.php";
    $TELEFONO = new TELEFONO();
    $result = $TELEFONO->queryConsultaTelefono();
   return json_encode($result);
}

function insertTelefono(){
    include_once "../modelo/telefono.php";
    $TELEFONO = new TELEFONO();
    return $TELEFONO->queryInsertTelefono();
}
