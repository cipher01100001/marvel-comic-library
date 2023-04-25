<?php
if (isset($_POST['signup'])) {
    require_once '../../config/database.php';

    $username = $_POST['username'];
    $password_hash = $_POST['password_hash'];
    $full_name = $_POST['full_name'];
    $document_number = $_POST['document_number'];
    $email = $_POST['email'];

    $password_hash = password_hash($password_hash, PASSWORD_DEFAULT, array('cost' => 12));
    $stmt = $conn->prepare("INSERT INTO user(username, password_hash, full_name, document_number, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $username, $password_hash, $full_name, $document_number, $email);

    $stmt->execute();
    if (($stmt) && ($stmt->affected_rows == 1)) {
        echo '<script type="text/javascript">
        alert("El usuario: ' . $username . ' se ha creado con exito");
        window.location.href = "../../index.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Error al registrar el usuario");
        window.location.href = "../../index.php";
        </script>';
    }
    $stmt->close();
    $conn->close();
}