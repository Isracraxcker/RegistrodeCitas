<?php
class Modelo{

  private $appointment;
  private $db;
  public $codcit;
  public $dates;
  public $hour;
  public $codpaci;
  public $coddoc;
  public $codespe;
  public $estado;
  
  
  

  public function __construct(){
      $this->appointment=array();
      $this->db=new PDO('mysql:host=localhost;dbname=proyecto_final',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT appointment.codcit, appointment.dates, appointment.hour,customers.nombrep,doctor.nomdoc, specialty.nombrees, appointment.estado, appointment.fecha_create FROM appointment INNER JOIN customers ON appointment.codpaci = customers.codpaci INNER JOIN doctor ON appointment.coddoc = doctor.coddoc INNER JOIN specialty ON appointment.codespe = specialty.codespe";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->appointment[]=$tabla;
      }
      return $this->appointment;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO appointment (dates,hour,codpaci,coddoc,codespe,estado)VALUES(?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->dates,$data->hour,$data->codpaci,
	  $data->coddoc,$data->codespe,$data->estado));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
    public function llenarespecialidad(){



    try{
      $consulta="SELECT * FROM specialty";
      $smt=$this->db->prepare($consulta);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);


    }catch(Exception $e){


    }

    }
	
	public function llenardoctor(){



    try{
      $consulta="SELECT * FROM doctor";
      $smt=$this->db->prepare($consulta);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);


    }catch(Exception $e){


    }

    }

   
	
	
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
