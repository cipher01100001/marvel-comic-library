<?php require_once '../controllers/check-login.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../public/img/icon.ico" />
    <link rel="stylesheet" href="../../public/css/user.css">
    <title>Inicio | Marvel Comic Library</title>
    <script defer src="https://kit.fontawesome.com/707789a0bc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script>
    <script defer async src="../../public/js/app.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div id="logo-navbar">
                <img src="../../public/img/logo.png" alt="Logo">
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favorites.php">Favoritos</a>
                </li>
            </ul>
            <a href="../controllers/logout.php" class="btn btn-light ms-auto"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row" id="results-container">
        </div>
        <div class="d-flex justify-content-center m-4">
            <button class="btn btn-primary" id="show-more-button">Ver más</button>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-white">Data provided by Marvel. © 2014 Marvel</span>
        </div>
    </footer>
</body>

</html>