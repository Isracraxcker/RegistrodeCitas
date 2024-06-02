<?php
function conectar(){
$conexion=null;
$host='127.0.0.1';
$db='proyecto_final';
$user = "root";
$pass= "";
try {
  $conexion= new PDO('mysql:host='.$host.';dbname='.$db, $user,$pass);


} catch (PDOException $e) {
  echo '<p> No se puede conectar a la base de datos </p>';
  exit;
}
return $conexion;


}

 ?>
