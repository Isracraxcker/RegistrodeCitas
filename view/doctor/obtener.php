<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			$dnidoc = $_POST['dnidoc'];
			$nomdoc = $_POST['nomdoc'];
			$apedoc = $_POST['apedoc'];
			
			$sexo = $_POST['sexo'];
			$telefo = $_POST['telefo'];
			$fechanaci = $_POST['fechanaci'];
			$correo = $_POST['correo'];
			$naciona = $_POST['naciona'];
		
			
$sql = "UPDATE doctor SET dnidoc = '$dnidoc', nomdoc = '$nomdoc', apedoc = '$apedoc', sexo = '$sexo', telefo = '$telefo',fechanaci = '$fechanaci', correo = '$correo', naciona = '$naciona' WHERE coddoc = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Doctor actualizado correctamente' : 'No se puso actualizar el doctor';

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

	header('location: ../../folder/doctor.php');

?>