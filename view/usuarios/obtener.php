<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id  = $_GET['id'];
			$nombre=$_POST['nombre'];
			$usuario=$_POST['usuario'];
			$email=$_POST['email'];
			$cargo=$_POST['cargo'];
			
			$sql = "UPDATE usuarios SET nombre = '$nombre',usuario = '$usuario',email = '$email',cargo = '$cargo' WHERE id = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Usuarios actualizado correctamente' : 'No se puso actualizar el usuario';

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

	header('location: ../../folder/usuarios.php');

?>