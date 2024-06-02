<?php
require_once '../model/modelappointment.php';
class appointmentcontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $appointment=new Modelo();

        $dato=$appointment->mostrar("appointment", "1");
        require_once '../view/appointment/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/appointment/AgregarModal.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->dates=$_POST['dates'];
                $alm->hour=$_POST['hour'];
                $alm->codpaci=$_POST['codpaci'];
				$alm->coddoc=$_POST['coddoc'];
				$alm->codespe=$_POST['codespe'];
				$alm->estado=$_POST['estado'];
				
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: appointment.php");

          }

            //ELIMINAR
            function eliminar(){
                $codcit=$_REQUEST['codcit'];
                $condicion="codcit=$codcit";
                $appointment=new Modelo();
                $dato=$appointment->eliminar("appointment", $condicion);
                header("location:appointment.php");
            }

    }
