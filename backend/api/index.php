<?php

include('../db/dbcalls.php');
/*
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
*/

$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_SERVER['REQUEST_URI'];

switch ($method) {
    case 'GET':
        if ($endpoint === '/api/users') {
            $users = getUsers();
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
    case 'POST':
        if ($endpoint === '/api/users') {
            $newUser = json_encode($_REQUEST);
            addUser($newUser);
            header("Location: ../index.php");
            exit;
        } elseif ($endpoint === '/api/walkers') {
            $newWalker = json_encode($_REQUEST);
            print_r($newWalker);
            addWalker($newWalker);
            header("Location: ../index.php");
            exit;
        }
        break;
    default: 
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
}

?>