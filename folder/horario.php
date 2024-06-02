<?php
require_once '../controller/horariocontroller.php';
$objhorario=new horariocontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objhorario->mostrar();
    elseif ($op=="nuevo")
        $objhorario->nuevo();
    elseif ($op=="guardar")
        $objhorario->guardar();
    elseif ($op=="editar")
        $objhorario->editar();
    elseif($op=="update")
        $objhorario->update();
        elseif($op=="insertar")
            $objhorario->insertar();
        elseif($op=="recibir")
            $objhorario->recibir();
            elseif($op=="eliminar")
                $objhorario->eliminar();
?>
