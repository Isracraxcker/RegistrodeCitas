<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_GET['codhor'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM horario WHERE codhor  = '".$_GET['codhor']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Horario borrado' : 'Hubo un error al borrar el Horario';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccionar miembro para eliminar primero';
	}

	header('location: ../../folder/horario.php');

?>