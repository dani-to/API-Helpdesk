//ejemplo estatico

<?php    										//abrimos etiqueta php
include_once"../control/controlcliente.php"; 	//incluimos archivo a donde sera enviado (control) (en este caso es controlcliente.php)
$params=[  										//abrimos variable array params
	"nombre"=>$_POST['nombre'],					//ponemos el nombre de la variable (en este caso no hay pronblema de que no 
	"a_paterno"=>$_POST['apaterno'],			//se llame igual que en la base de datos) entre comillas dobles => y entre 
	"a_materno"=>$_POST['amaterno']				//comillas dobles ponemos en dato a enviar a base de datos			
];												//cerramos el params
$result=insertCliente($params);					//ponemos variable que resive respuesta de la base de datos igualada a la 
												//funcion que esta en (controlcliente.php) y dentro de parentesis se pone lo que se envia de datos (puede ser el params o declarar cada dato)
echo $result;									//regresamos el resultado al servicio, en este caso (consulta ticket admi.js)