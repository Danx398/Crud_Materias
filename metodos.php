<?php
    class metodos{
        public function insertarDatos($datos){
            $c=new Conexion();
            $conexion = $c->conectar();
            $sql="INSERT into t_materias(nombre,creditos,semestre,carrera) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
            return $result=mysqli_query($conexion,$sql);
        }
        public function mostrarDatos($sql){
            $c=new Conexion();
            $conexion = $c->conectar();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function actualizarDatos($datos){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql="UPDATE t_materias set nombre='$datos[0]',
                                        creditos='$datos[1]',
                                        semestre='$datos[2]',
                                        carrera = '$datos[3]'
                                        where id_materia='$datos[4]'";
            $result=mysqli_query($conexion,$sql);
            return $result;
        }
        public function eliminarDatos($id){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql = "DELETE from t_materias where id_materia='$id'";
            return $result=mysqli_query($conexion,$sql);
        }

    }
?>