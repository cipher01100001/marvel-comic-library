<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" type="image/x-icon" href="public/img/icon.ico" />
    <title>Iniciar Sesión | Marvel Comic Library</title>
</head>

<body class="login-body">
    <div class="center">
        <h1>Iniciar Sesión</h1>
        <form method="POST" action="app/controllers/login-action.php">
            <div class="txt_field">
                <input type="text" required name="username">
                <span></span>
                <label>Usuario</label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password_hash">
                <span></span>
                <label>Contraseña</label>
            </div>
            <input type="submit" value="Login" name="login">
            <div class="signup_link">
                No estas registrado? <a href="./app/views/signup.php">Registrarse</a>
            </div>
        </form>
    </div>
</body>

</html>