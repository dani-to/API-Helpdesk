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
						'estatus' => $res[$row][1]
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