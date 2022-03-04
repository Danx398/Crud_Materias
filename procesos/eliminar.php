<?php
    require_once "../app/Conexion.php";
    require_once "../metodos.php";
    $id = $_GET['id'];

    $obj= new metodos();
    if ($obj->eliminarDatos($id)==1) {
        header("location:../index.php");
    }else{
        echo "no se pudo eliminar";
    }
?>