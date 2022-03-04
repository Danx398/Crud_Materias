<?php
    require_once "app/Conexion.php";
    $conexion = Conexion::conectar();
    $id=$_GET['id'];
    // echo $id;
    $sql="SELECT nombre,creditos,semestre,carrera from t_materias where id_materia='$id'";
    $resul = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($resul);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-6">
          <form action="procesos/actualizar.php" method="post" class="form-control mt-5">
                    <input type="text" hidden value="<?= $id ?>" name="id">
                    <label for="">Nombre</label>
                    <input required="" class="form-control " autocomplete="off" type="text" name="nombre" value="<?= $ver[0] ?>">
                    <label for="">Creditos</label>
                    <input required="" class="form-control" autocomplete="off" type="number" name="creditos" value="<?= $ver[1] ?>">
                    <label for="">Semestre</label>
                    <input required="" type="number" class="form-control" autocomplete="off" name="semestre" value="<?= $ver[2] ?>">
                    <label for="">Carrera</label>
                    <input required="" type="text" class="form-control" autocomplete="off" name="carrera" value="<?= $ver[3] ?>">
                    <button class="btn btn-outline-dark container-fluid mt-2">Actualizar</button>
</form>
          </div>
          
      </div>
  </div>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>