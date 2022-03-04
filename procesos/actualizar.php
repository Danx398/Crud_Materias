<?php
    require_once "../app/Conexion.php";
    require_once "../metodos.php";
    $nombre = $_POST['nombre'];
    $creditos = $_POST['creditos'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];
    $id = $_POST['id'];
    $datos = array($nombre,$creditos,$semestre,$carrera,$id);
    $obj = new metodos();
    if ($obj->actualizarDatos($datos)==1) {
        header("location:../index.php");
    }else{
        echo "No se pudo actualizar";
    }
?>