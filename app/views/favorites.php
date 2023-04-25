<?php require_once '../controllers/check-login.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../public/img/icon.ico" />
    <title>Favoritos | Marvel Comic Library</title>
    <script defer src="https://kit.fontawesome.com/707789a0bc.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./home.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favoritos</a>
                </li>
            </ul>
            <a href="../controllers/logout.php" class="btn btn-light"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
    </nav>

</body>

</html>