<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Login</title>
</head>
<body class="bg-dark">
    <div class="container h-100">
        <div class="row align-items-center h-100">
     
            <div class="card mx-auto" style="width: 420px;">    
                <div class="card-body">
                    <p class="text-center">
                        <img src="/img/avatar.gif" class="rounded-circle border" style="height: 128px;">
                    </p>
                    <p class="text-justify">
                        <form action="login.php" method="post">                    
                            <div class="form-group mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="Nombre de usuario" autofocus>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control form-control-lg" placeholder="Contraseña">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>