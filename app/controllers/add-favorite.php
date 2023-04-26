<?php
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data)) {
    require_once '../../config/database.php';
    session_start();
    $json_data = json_encode($data);
    $stmt = $conn->prepare("INSERT INTO comic(id_user, data_comic) VALUES (?, ?)");
    $stmt->bind_param("is", $_SESSION['id_user'], $json_data);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Se agrego a tu lista de favoritos']);
    } else {
        echo json_encode(['message' => 'Error al agregar']);
    }
}
