<?php

$users = [
    ['id' => 1, 'name' => 'Alice'],
    ['id' => 2, 'name' => 'Bob'],
    ['id' => 3, 'name' => 'Charlie']
];

$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_SERVER['REQUEST_URI'];

switch ($method) {
    case 'GET':
        if ($endpoint === '/api/users') {
            header('Content-Type: application/json');
            echo json_encode($users);
        } elseif (preg_match('/\/users\/(\d+)/', $endpoint, $matches)) {
            $userId = $matches[1];
            $user = array_filter($users, function ($u) use ($userId) {
                return $u['id'] == $userId;
            });
            if (!empty ($user)) {
                header('Content-Type: application/json');
                echo json_encode(array_values($user)[0]);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'User not found']);
            }
        }
        break;
    default: 
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
}

?>