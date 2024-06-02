<?php
require_once '../model/modelcustomers.php';
class customerscontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $customers=new Modelo();

        $dato=$customers->mostrar("customers", "1");
        require_once '../view/customers/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/customers/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->dnipa=$_POST['txtdnia'];
				$alm->nombrep=$_POST['txtnomb'];
				$alm->apellidop=$_POST['txtapell'];
				$alm->seguro=$_POST['cbosegu'];
				$alm->tele=$_POST['txttele'];
				$alm->sexo=$_POST['cbosex'];
				$alm->usuario=$_POST['txtusu'];
				$alm->password=$_POST['txtpass'];
				$alm->estado=$_POST['cboesta'];
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: customers.php");

          }

            //ELIMINAR
            function eliminar(){
                $codpaci=$_REQUEST['codpaci'];
                $condicion="codpaci=$codpaci";
                $customers=new Modelo();
                $dato=$customers->eliminar("customers", $condicion);
                header("location:customers.php");
            }

    }
