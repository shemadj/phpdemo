<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de nuevo alumno</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body class="bg-dark">

    <div class="card w-75 mx-auto">
      <form action="nuevo.php" method="post">

        <div class="card-header">
          <div class="row">
            <div class="col text-left">
              <h3>Registro de nuevo alumno</h3>
            </div>
            <div class="col text-right">
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </div>
          </div>
        </div>

        <div class="card-body">

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required value="">
            </div>
            <div class="col">
              <input type="text" name="apellidos" class="form-control" placeholder="Apellido" required value="">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="text" name="email" class="form-control" placeholder="Email" required value="">
            </div>
            <div class="col">
              <input type="text" name="username" class="form-control" placeholder="Username" required value="">
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col">
              <input type="password" name="password" class="form-control" placeholder="Contraseña" required value="">
            </div>
            <div class="col">
              <input type="password" name="password2" class="form-control" placeholder="Repetir contraseña" required value="">
            </div>
          </div>

        </div>

      </form>
    </div>
  </body>
</html>
