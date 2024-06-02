<?php
class Modelo{

  private $specialty;
  private $db;

  public function __construct(){
      $this->specialty=array();
      $this->db=new PDO('mysql:host=localhost;dbname=proyecto_final',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM specialty";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->specialty[]=$tabla;
      }
      return $this->specialty;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO specialty (nombrees)VALUES(?)";

      $this->db->prepare($query)->execute(array($data->nombrees));

    }catch (Exception $e) {

      die($e->getMessage());
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
