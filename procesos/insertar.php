<?php
    require_once "../app/Conexion.php";
    require_once "../metodos.php";
    $nombre = $_POST['nombre'];
    $creditos = $_POST['creditos'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];

    $datos=array($nombre,$creditos,$semestre,$carrera);
    $obj = new metodos();
    if ($obj->insertarDatos($datos)==1) {
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }
    
?>