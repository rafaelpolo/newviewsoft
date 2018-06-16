<?php


include_once ("../views/Administrador/ARol.php");
if (isset($_POST["enviar"]))
{
    $t_doc=$_POST["tdocumento"];
    $n_doc=$_POST["documento"];
    $rol=$_POST["cargo"];
    require_once ("../model/asignar_rol.php");

    $roles=new Asignar_rol();
    $roles->set_recive($t_doc,$n_doc,$rol);
    $roles->set_rol();
}

?>