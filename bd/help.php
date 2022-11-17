<?php

	include_once 'bd.php';

	class help extends DB{
		function obtenerTicket(){
			$query = $this->connect()->query('SELECT folio, estatus FROM ticket');

			return $query;
		}
	}

?>