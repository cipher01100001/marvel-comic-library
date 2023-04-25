<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/x-icon" href="../../public/img/icon.ico" />
    <title>Marvel Comic Library</title>
</head>

<body class="signup-body">
    <div class="center">
        <h1>Registrarse</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Nombre completo</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Nro. de documento</label>
            </div>
            <div class="txt_field">
                <input type="email" required>
                <span></span>
                <label>Correo electrónico</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Usuario</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Contraseña</label>
            </div>
            <input type="submit" value="Enviar">
            <div class="signup_link">
                Tienes una cuenta? <a href="login.php">Iniciar sesión</a>
            </div>
        </form>
    </div>
</body>

</html>