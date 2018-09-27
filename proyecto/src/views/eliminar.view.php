<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Registro de Alumno</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body class="bg-dark">

    <div class="card w-75 mx-auto">

      <form action="eliminar.php" method="post">
        <input type="hidden" name="id" value="12345">
        <h3 class="card-header">
          Confirmar eliminación de registro
        </h3>
        <div class="card-body">
          <div class="card-text mb-3">
            ¿Estás seguro de eliminar el registro del alumno XYZ?
          </div>
          <dir class="row">
            <div class="col text-left">
              <button type="submit" class="btn btn-danger" name="opcion" value="ok">Aceptar</button>
            </div>
            <div class="col text-right">
              <button type="submit" class="btn btn-primary" name="opcion" value="cancel">Cancelar</button>
            </div>
          </dir>
        </div>
      </form>


    </div>

  </body>
</html>
