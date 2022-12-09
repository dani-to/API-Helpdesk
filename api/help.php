<?php

	include_once 'bd.php';

	class help{
		function obtenerTicket(){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente";

			return ejecutarConsultaSimpleFila($query);
		}
	}

?>