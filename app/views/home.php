<?php require_once '../controllers/check-login.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../public/img/icon.ico" />
    <title>Inicio | Marvel Comic Library</title>
    <script defer src="https://kit.fontawesome.com/707789a0bc.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favorites.php">Favoritos</a>
                </li>
            </ul>
            <a href="../controllers/logout.php" class="btn btn-light"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card bg-dark m-3">
                    <img class="card-img-top" src="imagen1.jpg" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title text-white">Título imagen 1</h5>
                        <p class="card-text text-white">Descripción imagen 1.</p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-danger"><i class="fa-solid fa-heart-circle-plus mx-1"></i>Añadir</i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-dark m-3">
                    <img class="card-img-top" src="imagen1.jpg" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title text-white">Título imagen 2</h5>
                        <p class="card-text text-white">Descripción imagen 2.</p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-danger"><i class="fa-solid fa-heart-circle-plus mx-1"></i>Añadir</i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-dark m-3">
                    <img class="card-img-top" src="imagen1.jpg" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title text-white">Título imagen 3</h5>
                        <p class="card-text text-white">Descripción imagen 3.</p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-danger"><i class="fa-solid fa-heart-circle-plus mx-1"></i>Añadir</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-white">Data provided by Marvel. © 2014 Marvel</span>
        </div>
    </footer>
</body>

</html>