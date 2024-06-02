<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			$nomhor = $_POST['nomhor'];
			$coddoc = $_POST['coddoc'];
			
			
$sql = "UPDATE horario SET nomhor = '$nomhor', coddoc = '$coddoc'  WHERE codhor = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Horario actualizado correctamente' : 'No se puso actualizar el Horario';

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

	header('location: ../../folder/horario.php');

?>