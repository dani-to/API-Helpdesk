<?php
//creado por David y Nayelli el 17 de noviembre
	include_once 'bd.php';

	class help{
		function obtenerTicket(){
			$query = "SELECT folio, estatus FROM ticket";

			return ejecutarConsultaSimple($query);
		}
	}

?>