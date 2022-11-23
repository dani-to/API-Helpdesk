<?php

	include_once 'bd.php';

	class help{
		function obtenerTicket(){
			$query = "SELECT folio, estatus FROM ticket";

			return ejecutarConsultaSimpleFila($query);
		}
	}

?>