<?php

//creado por David y Nayelli el 18 de noviembre
	require_once("global.php");
 
	$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	
	if(mysqli_connect_error()){
		printf("Error en la conexion a la base de datos: %s\n",mysqli_connect_error());
		exit();
	}

	//echo "Hola Mundo: ".$conexion->host_info." adios\n";
	
	function ejecutarConsulta($sql){
		global $conexion;
		$query = $conexion->query($sql);
		return $query;
	}

	function ejecutarConsultaSimple($sql){
		global $conexion;
		$query = $conexion->query($sql);
		$row = $query->fetch_all();
		return $row;
	}

	function ejecutarConsultaRetornaID($sql){
		global $conexion;
		$query = $conexion->query($sql);
		return $conexion->insert_id;
	}

	function limpiarCadenas($str){
		global $conexion;
		$str = mysqli_real_escape_string($conexion,trim($str));
		return htmlspecialchars($str); 	
	}

?>