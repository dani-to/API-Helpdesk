<?php

	include_once 'bd.php';

	class help{
		function obtenerTicket(){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente";

			return ejecutarConsultaSimpleFila($query);
		}

		function obtenerTicketConsulta($id){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente and t.folio=".$id;

			return ejecutarConsultaSimpleFila($query);
		}

		function obtenerTicketEmpleado($empleado){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente and t.id_empleado=".$empleado;

			return ejecutarConsultaSimpleFila($query);
		}

		function obtenerTicketCliente($cliente){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente and c.nombre=".$cliente;

			return ejecutarConsultaSimpleFila($query);
		}

		function obtenerTicketCreacion($creacion){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente and t.fecha_creacion=".$creacion;

			return ejecutarConsultaSimpleFila($query);
		}

		function obtenerTicketSolucion($solucion){
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente and t.fecha_solucion=".$solucion;

			return ejecutarConsultaSimpleFila($query);
		}

		function obtenerTicketEstatus($estatus){
			$estatus = strtoupper($estatus);
			switch($estatus){
				case 'PENDIENTE': $estatus=0; break;
				case 'SOLUCIONADO': $estatus=1; break;
				case '1': $estatus=1; break;
				case '0': $estatus=0; break;
				default: 
			}
			$query = "SELECT t.folio, t.id_empleado, c.nombre, t.fecha_creacion, t.fecha_solucion, t.estatus FROM tickets t, clientes c where c.id_clientes = t.id_cliente and t.estatus=".$estatus;

			return ejecutarConsultaSimpleFila($query);
		}
	}

?>