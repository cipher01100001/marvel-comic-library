<?php


$data = json_decode(file_get_contents('php://input'), true);


if (isset($data)) {
    require_once '../../config/database.php';
    $query  = "SELECT * FROM comic";
    $result = mysqli_query($conn, $query);

    $match = false;
    foreach ($result as $row) {
        $data_comic = json_decode($row['data_comic']);

        if ($data_comic->id == $data['id']) {
            $match = $data['id'];
        }
    }

    if (!$match == false) {
        echo json_encode(['message' => $data['id']]);
    } else {
        echo json_encode(['message' => 'false']);
    }
}
