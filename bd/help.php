<?php

	include_once 'bd.php';

	class help{
		function obtenerTicket(){
			$query = "SELECT folio, estatus FROM tickets";

			return ejecutarConsultaSimpleFila($query);
		}
	}

?>