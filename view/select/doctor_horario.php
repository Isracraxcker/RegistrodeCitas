<?php

$conexion = mysqli_connect("localhost","root","","proyecto_final");

$el_horario = $_POST['horario'];

$query = $conexion->query("SELECT * FROM horario WHERE coddoc = $el_horario");



while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codhor']. '">' . $row['nomhor'] . '</option>' . "\n";
}
