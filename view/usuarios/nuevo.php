<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO customers (dnipa, nombrep,apellidop,seguro,tele,sexo,email,clave ,cargo,estado) 
		VALUES (:dnipa, :nombrep, :apellidop, :seguro, :tele,:sexo,:email,:clave,:cargo,:estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':dnipa' => $_POST['dnipa'] , ':nombrep' => $_POST['nombrep'] , ':apellidop' => $_POST['apellidop'], 
		':seguro' => $_POST['seguro'], ':tele' => $_POST['tele'], ':sexo' => $_POST['sexo'], ':email' => $_POST['email'], ':clave' => MD5($_POST['clave']), 
		':cargo' => $_POST['cargo'], ':estado' => $_POST['estado'])) ) ? 'Paciente guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../../folder/customers.php');
	
?>