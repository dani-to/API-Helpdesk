<?php
	include_once 'api/apihelp.php';

	$api = new ApiTicket();
	//echo $_GET;
	if($_GET["folio"]){
		$api->getId($_GET["folio"]);
	}else if($_GET["id_empleado"]){
		$api->getEmpleado($_GET["id_empleado"]);
	}else if($_GET["nombre"]){
		$api->getCliente($_GET["nombre"]);
	}else if($_GET["fecha_creacion"]){
		$api->getCreacion($_GET["fecha_creacion"]);
	}else if($_GET["fecha_solucion"]){
		$api->getSolucion($_GET["fecha_solucion"]);
	}else if($_GET["estatus"]){
		$api->getEstatus($_GET["estatus"]);
	}else{
		$api->getAll();
	}
?>