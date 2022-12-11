<?php
	include_once 'api/apihelp.php';

	$api = new ApiTicket();
	//echo $_GET;
	if(isset($_GET["folio"])){
		$api->getId($_GET["folio"]);
	}else if(isset($_GET["id_empleado"])){
		$api->getEmpleado($_GET["id_empleado"]);
	}else if(isset($_GET["nombre"])){
		$api->getCliente($_GET["nombre"]);
	}else if(isset($_GET["fecha_creacion"])){
		$api->getCreacion($_GET["fecha_creacion"]);
	}else if(isset($_GET["fecha_solucion"])){
		$api->getSolucion($_GET["fecha_solucion"]);
	}else if(isset($_GET["estatus"])){
		$api->getEstatus($_GET["estatus"]);
	}else{
		$api->getAll();
	}
?>