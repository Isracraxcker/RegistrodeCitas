<?php
require_once '../model/modelspecialty.php';
class specialtycontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $specialty=new Modelo();

        $dato=$specialty->mostrar("specialty", "1");
        require_once '../view/specialty/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/specialty/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nombrees=$_POST['txtnomes'];
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: specialty.php");

          }

            //ELIMINAR
            function eliminar(){
                $codespe=$_REQUEST['codespe'];
                $condicion="codespe=$codespe";
                $specialty=new Modelo();
                $dato=$specialty->eliminar("specialty", $condicion);
                header("location:specialty.php");
            }

    }
