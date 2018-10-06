<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Listado de Alumnos</title>
</head>
<body class="bg-dark">
    
    <div class="card w-75 mx-auto">

        <div class="card-header">
            <div class="row">
                <div class="col text-left">
                    <h3>Alumnos Registrados</h3>
                </div>
                <div class="col text-right">
                    <a href="nuevo.php" class="btn btn-primary">Agregar</a>
                </div>
            </div>
        </div>

        <div class="card-body">

            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>EMAIL</th>
                        <th>USERNAME</th>
                        <th>CREADO</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listado as $usuario): ?>
                        <tr>
                            <td><?= $usuario['nombre'] ?></td>
                            <td><?= $usuario['apellidos'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= $usuario['username'] ?></td>
                            <td><?= $usuario['creado']?></td>
                            <td>
                                <a href="editar.php?id=<?= $usuario['id'] ?>">
                                    <i class="fas fa-edit text-secondary"></i>
                                </a>
                            </td>
                            <td>
                                <a href="eliminar.php?id=<?= $usuario['id'] ?>">
                                    <i class="fas fa-trash text-secondary"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>            
                </tbody>


            </table>

        </div>

    </div>


</body>
</html>