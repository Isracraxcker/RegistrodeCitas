<?php

$conexion = mysqli_connect("localhost","root","","proyecto_final");

$query = $conexion->query("SELECT * FROM specialty");

echo '<option value="0">Seleccione la especialidad</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codespe']. '">' . $row['nombrees'] . '</option>' . "\n";
}



