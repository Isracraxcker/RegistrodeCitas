<?php
require_once '../model/modelusuarios.php';
class usuarioscontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $usuarios=new Modelo();

        $dato=$usuarios->mostrar("usuarios", "1");
        require_once '../view/usuarios/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/usuarios/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nombre=$_POST['txtnombre'];
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: usuarios.php");

          }

            //ELIMINAR
            function eliminar(){
                $id=$_REQUEST['id'];
                $condicion="id=$id";
                $usuarios=new Modelo();
                $dato=$usuarios->eliminar("usuarios", $condicion);
                header("location:usuarios.php");
            }

    }
