<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$codpaci  = $_GET['codpaci'];
			$dnipa = $_POST['dnipa'];
			$nombrep = $_POST['nombrep'];
			$apellidop = $_POST['apellidop'];
			$seguro = $_POST['seguro'];
			$tele = $_POST['tele'];
			$sexo = $_POST['sexo'];
			$usuario = $_POST['usuario'];
			
			$sql = "UPDATE customers SET dnipa = '$dnipa',nombrep = '$nombrep',apellidop = '$apellidop',seguro = '$seguro',tele = '$tele',sexo = '$sexo' ,usuario = '$usuario' WHERE codpaci = '$codpaci'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Paciente actualizado correctamente' : 'No se puso actualizar el paciente';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../../folder/customers.php');

?>