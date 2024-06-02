<?php
require_once '../controller/usuarioscontroller.php';
$objusuarios=new usuarioscontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objusuarios->mostrar();
    elseif ($op=="nuevo")
        $objusuarios->nuevo();
    elseif ($op=="guardar")
        $objusuarios->guardar();
    elseif ($op=="editar")
        $objusuarios->editar();
    elseif($op=="update")
        $objusuarios->update();
        elseif($op=="insertar")
            $objusuarios->insertar();
        elseif($op=="recibir")
            $objusuarios->recibir();
            elseif($op=="eliminar")
                $objusuarios->eliminar();
?>
