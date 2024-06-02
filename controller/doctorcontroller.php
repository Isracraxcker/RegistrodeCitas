<?php
require_once '../model/modeldoctor.php';
class doctorcontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $doctor=new Modelo();

        $dato=$doctor->mostrar("doctor", "1");
        require_once '../view/doctor/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/doctor/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->dnidoc=$_POST['txtdni'];
                $alm->nomdoc=$_POST['txtnomd'];
                $alm->apedoc=$_POST['txtapedo'];
				$alm->codespe=$_POST['cboespe'];
				$alm->sexo=$_POST['cbosex'];
				$alm->telefo=$_POST['txttele'];
				$alm->fechanaci=$_POST['txtfech'];
				$alm->correo=$_POST['txtcorr'];
				$alm->naciona=$_POST['cbonaci'];
				$alm->estado=$_POST['cboesta'];
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: doctor.php");

          }

            //ELIMINAR
            function eliminar(){
                $coddoc=$_REQUEST['coddoc'];
                $condicion="coddoc=$coddoc";
                $doctor=new Modelo();
                $dato=$doctor->eliminar("doctor", $condicion);
                header("location:doctor.php");
            }

    }
