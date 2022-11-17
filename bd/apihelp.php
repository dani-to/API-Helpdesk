<?php
	include_once 'help.php';

	class ApiTicket{
		function getAll(){
			$ticket = new help();

			$res =$ticket->obtenerTicket();

			if($res->rowCount()){
				while($row=$res->fetch(PDO::FETCH_ASSOC)){
					$ticket = array(
						'folio' => $row['folio'],
						'estatus' => $row['estatus']
					);
					array_push($ticket[]);
				}
				echo json_encode($ticket);
			}else{
				echo json_encode(array('mensaje' => 'No hay elementos regiistrados'));
			}
		}
	}
?>