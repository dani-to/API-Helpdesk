<?php
	include_once 'help.php';

	class ApiTicket{
		function getAll(){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicket();

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}

		function getId($folio){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicketConsulta($folio);

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}

		function getEmpleado($id_empleado){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicketEmpleado($id_empleado);

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}

		function getCliente($nombre_cliente){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicketCliente($nombre_cliente);

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}

		function getCreacion($fecha_creacion){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicketCreacion($fecha_creacion);

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}

		function getSolucion($fecha_solucion){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicketSolucion($fecha_solucion);

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}

		function getEstatus($estatus){
			$ticket = new help();
			$tickets = array();
			$tickets ["items"] = array();

			$res =$ticket->obtenerTicketEstatus($estatus);

			if(count($res)>0){
				for($row=0; $row<count($res); $row++){
					$item = array(	
						'folio' => $res[$row][0],
						'id_empleado' => $res[$row][1],
						'nombre_cliente' => $res[$row][2],
						'fecha_creacion' => $res[$row][3],
						'fecha_solucion' => $res[$row][4],
						'estatus' => ($res[$row][5]==0)? 'PENDIENTE' : 'SOLUCIONADO'
					);
					array_push($tickets['items'], $item);
				}
				echo json_encode($tickets);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos registrados'));
			}
		}
	}
?>