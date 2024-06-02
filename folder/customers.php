<?php
require_once '../controller/customerscontroller.php';
$objcusto=new customerscontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objcusto->mostrar();
    elseif ($op=="nuevo")
        $objcusto->nuevo();
    elseif ($op=="guardar")
        $objcusto->guardar();
    elseif ($op=="editar")
        $objcusto->editar();
    elseif($op=="update")
        $objcusto->update();
        elseif($op=="insertar")
            $objcusto->insertar();
        elseif($op=="recibir")
            $objcusto->recibir();
            elseif($op=="eliminar")
                $objcusto->eliminar();
?>
