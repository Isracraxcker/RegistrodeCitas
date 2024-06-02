<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO doctor (dnidoc, nomdoc,apedoc,codespe,sexo,telefo,fechanaci,correo ,naciona,estado) VALUES (:dnidoc, :nomdoc, :apedoc, :codespe, :sexo,:telefo,:fechanaci,:correo,:naciona,:estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':dnidoc' => $_POST['dnidoc'] , ':nomdoc' => $_POST['nomdoc'] , ':apedoc' => $_POST['apedoc'], ':codespe' => $_POST['codespe'], ':sexo' => $_POST['sexo'], ':telefo' => $_POST['telefo'], ':fechanaci' => $_POST['fechanaci'], ':correo' => $_POST['correo'], ':naciona' => $_POST['naciona'], ':estado' => $_POST['estado'])) ) ? 'Paciente guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
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

header('location: ../../folder/doctor.php');
	
?>