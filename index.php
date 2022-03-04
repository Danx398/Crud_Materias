<?php
    require_once "app/Conexion.php";
    require_once "./metodos.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Materias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/fontawesome/css/all.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2 text-center">Materias</h1>

                <form action="procesos/insertar.php" method="post" class="form-control">
                    <div class="input-group">
                        <label for="" class="input-group-text">Nombre</label>
                        <input required="" class="form-control " autocomplete="off" type="text" name="nombre">
                        <label for="" class="input-group-text">Creditos</label>
                        <input required="" class="form-control" autocomplete="off" type="number" name="creditos">
                    </div>
                    <label for="">Semestre</label>
                    <select class="form-select" name="semestre" id="">
                        <!-- <option value="">Elige una opción</option> -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <label for="">Carrera</label>
                    <select class="form-select" name="carrera" id="">
                        <!-- <option value="">Elige una opción</option> -->
                        <option value="ING SISTEMAS">Ingenieria en sistemas</option>
                        <option value="ING GESTION">Ingenieria en gestión</option>
                        <option value="ING INDUSTRIAL">Ingenieria Industrial</option>
                    </select>
                    <div class=" ms-5 mt-3 col-11 justify-content-center">
                    <button class="btn btn-outline-dark container-fluid">Agregar Materia</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Creditos</th>
                            <th>Semestre</th>
                            <th>Carrera</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $obj = new metodos(); 
                           $sql = "SELECT * from t_materias";
                           $datos=$obj->mostrarDatos($sql);
                           foreach ($datos as $key) :
                        ?>
                        <tr>
                            <td><?= $key['nombre'] ?></td>
                            <td><?= $key['creditos'] ?></td>
                            <td><?= $key['semestre'] ?></td>
                            <td><?= $key['carrera'] ?></td>
                            <td><a href="editar.php?id=<?= $key['id_materia'] ?>">Editar</a></td>
                            <td><a href="procesos/eliminar.php?id=<?= $key['id_materia'] ?>">Eliminar</a></td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>