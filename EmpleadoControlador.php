<?php
session_start();
require_once '../php/EmpleadoBean.php';
require_once '../php/EmpleadoDAO.php';
$opcion=$_GET['op'];


switch($opcion){
    case 1:
    {unset($_SESSION['lista']);
        $objEmpleadoDAO=new EmpleadoDAO();
        $lista=$objEmpleadoDAO->ListarEmpleados();
    $_SESSION['lista']=$lista;
    header('Location:FrmInsertar.php');
    break;
    }
    case 2:
    { unset($_SESSION['lista']);
        header('Location:FrmMenu.php');
        break;
    }
    case 3:
    {unset($_SESSION['lista']);
    unset($_SESSION['estadoeliminar']);
    $codigo=$_GET['cod'];
    $objEmpleadoBean= new EmpleadoBean();
    $objEmpleadoBean->setCODEMPLE($codigo);
    $objEmpleadoDAO=new EmpleadoDAO();
    $estado=$objEmpleadoDAO->EliminarEmpleados($objEmpleadoBean);
    $_SESSION['estadoeliminar']=$estado;
    $lista=$objEmpleadoDAO->ListarEmpleados();
    $_SESSION['lista']=$lista;
    
    header('Location:FrnInsertar.php');
    break;
    }
}

?>