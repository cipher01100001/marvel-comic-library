<?php

if (isset($_POST['login'])) {
    require_once '../../config/database.php';
    $username = $_POST['username'];
    $password_hash = $_POST['password_hash'];

    $stmt = $conn->prepare("SELECT id, username, password_hash FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id_user, $user, $password);

    if ($stmt->fetch()) {
        if (password_verify($password_hash, $password)) {
            session_start();
            $_SESSION['id_user'] = $id_user;
            $_SESSION['username'] = $user;
            echo '<script type="text/javascript">
                alert("Bienvenid@: ' . $user . '");
                window.location.href = "../views/home.php";
                </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Usuario y/o contraseña erroneos");
            window.location.href = "../../index.php";
            </script>';
        }
    } else {
        echo '<script type="text/javascript">
		alert("No se encontró registrado al usuario: ' . $user . '");
		window.location.href = "../../index.php";
		</script>';
    }
    $stmt->close();
    $conn->close();
}
