<?php
require_once './config/db_connection.php';
require_once 'UserController.php';

// Crear instancia del controlador
$controller = new UserController($conn);

// Obtener el tipo de solicitud (GET, POST, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Ruta de la API
$path = $_SERVER['PATH_INFO'];

// Body de la API
$request = $_REQUEST;

// Manejar las solicitudes
switch ($path) {
    case '/':
        if ($method === 'GET') {
            $response = $controller->getUsers();
            echo json_encode($response);
        } else {
            // Manejar otros métodos HTTP para la ruta '/users' si es necesario
        }
        break;

    // Agregar más rutas y acciones según sea necesario
    case '/save':
        if ($method === 'POST') {
            $response = $controller->saveUser($request);
            echo json_encode($response);
        } else {
            // Manejar otros métodos HTTP para la ruta '/users' si es necesario
        }
        break;

    default:
        // Manejar rutas no encontradas
        http_response_code(404);
        echo 'Ruta no encontrada';
        break;
}
?>
