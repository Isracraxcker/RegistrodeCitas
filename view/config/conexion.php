<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'proyecto_final');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>