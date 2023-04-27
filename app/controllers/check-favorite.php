<?php


$data = json_decode(file_get_contents('php://input'), true);


if (isset($data)) {
    require_once '../../config/database.php';
    $query  = "SELECT * FROM comic";
    $result = mysqli_query($conn, $query);

    foreach ($result as $row) {
        $data_comic = json_decode($row['data_comic']);

        if ($data_comic->id == $data['id']) {
            $match = $data['id'];
        } else {
            $match = false;
        }
    }
    
    if (!$match == false) {
        echo json_encode(['message' => $data['id']]);
    }else {
        echo json_encode(['message' => 'false']);
    }

}


// if ($result == true) {
//     if (mysqli_num_rows($result) > 0) {
//         foreach ($result as $row) {
//             $data_comic = json_decode($row['data_comic']);
//             if ($data_comic->id == $_POST['id']) {
//             } else {
//             }
//         }
//     }
// }
