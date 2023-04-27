<?php require_once '../controllers/check-login.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/user.css">
    <link rel="icon" type="image/x-icon" href="../../public/img/icon.ico" />
    <title>Favoritos | Marvel Comic Library</title>
    <script defer src="https://kit.fontawesome.com/707789a0bc.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div id="logo-navbar">
                <img src="../../public/img/logo.png" alt="Logo">
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./home.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favoritos</a>
                </li>
            </ul>
            <a href="../controllers/logout.php" class="btn btn-light ms-auto"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
    </nav>

    <div class="container mt-3">

        <h2>Lista de comics favoritos</h2>
        <div class="row" id="results-container">
            <?php

            function getImageComic($images)
            {
                $img = '../../public/img/default-comic-cover.png';
                if (count($images) > 0) {
                    $img = $images[0]->path . '.' . $images[0]->extension;
                }
                return $img;
            }

            require_once '../../config/database.php';
            $session_id = $_SESSION['id_user'];
            $query  = "SELECT * FROM comic WHERE id_user='$session_id'";
            $result = mysqli_query($conn, $query);

            if ($result == true) {
                if (mysqli_num_rows($result) > 0) {
                    foreach ($result as $row) {
                        $data_comic = json_decode($row['data_comic']);

            ?>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-dark m-3">
                                <img class="card-img-top" src="<?php echo getImageComic($data_comic->images) ?>" alt="Imagen 1">
                                <div class="card-body">
                                    <h5 class="card-title text-white"><?php echo $data_comic->title ?></h5>
                                    <p class="card-text text-white">$<?php echo $data_comic->description ?></p>
                                </div>
                            </div>
                        </div>

            <?php
                    }
                } else {
                    echo '<script type="text/javascript">
                alert("No hay comics favoritos");
                </script>';
                }
            } else {
                echo '<script type="text/javascript">
              alert("Error al consultar favoritos");
              </script>';
            }

            ?>


        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-white">Data provided by Marvel. © 2014 Marvel</span>
        </div>
    </footer>

</body>

</html>