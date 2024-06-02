
<?php
//Incluimos el fichero de conexion
Class dbConexion{
/* Variables de conexion */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "proyecto_final";
var $conn;
//Funcion de conexion MySQL
function getConexion() {
$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

/* Revisamos la conexion */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}
//Incluimos la libreria PDF
include_once('../../assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Funcion encargado de realizar el encabezado
function Header()
{
// Logo
$this->Image('../../assets/img/icon.png',10,-1,30);
$this->SetFont('Arial','B',13);
// Move to the right
$this->Cell(80);
// Title
$this->Cell(95,10,'Lista de los pacientes',1,0,'C');
// Line break
$this->Ln(20);
}
// Funcion pie de pagina
function Footer()
{
// Position at 1.5 cm from bottom
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','I',8);
// Page number
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbConexion();
$connString = $db->getConexion();
$display_heading = array('codpaci'=>'#', 'dnipa'=> 'DNI', 'nombrep'=> 'Nombres','apellidop'=> 'Apellidos','seguro'=> 'Seguro','tele'=> 'Telefono', 'sexo'=> 'Sexo');

$result = mysqli_query($connString, "SELECT * FROM customers") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM customers");

$pdf = new PDF('L','mm','A4');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12, 'UTF-8');
// Declaramos el ancho de las columnas
$w = array(10, 25, 70, 70,25,35,25,25);
//Declaramos el encabezado de la tabla
$pdf->Cell(10,12,'#',1);
$pdf->Cell(25,12,'DNI',1);
$pdf->Cell(70,12,'NOMBRES',1);
$pdf->Cell(70,12,'APELLIDOS',1);
$pdf->Cell(25,12,'SEGURO',1);
$pdf->Cell(35,12,'TELEFONO',1);
$pdf->Cell(25,12,'SEXO',1);
$pdf->Cell(25,12,'USUARIO',1);

$pdf->Ln();
$pdf->SetFont('Arial','',12, 'UTF-8');
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['codpaci'],1);
$pdf->Cell($w[1],6,utf8_decode($row['dnipa']),1);
$pdf->Cell($w[2],6,utf8_decode($row['nombrep']),1);
$pdf->Cell($w[3],6,utf8_decode($row['apellidop']),1);
$pdf->Cell($w[4],6,utf8_decode($row['seguro']),1);
$pdf->Cell($w[5],6,utf8_decode($row['tele']),1);
$pdf->Cell($w[6],6,utf8_decode($row['sexo']),1);
$pdf->Cell($w[7],6,utf8_decode($row['usuario']),1);

$pdf->Ln();
}
$pdf->Output('pacientes.pdf', 'D');
?>