<?php

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

require_once dirname(__DIR__) . '/helpers/helpers.php';

// Ruta test
$app->get('/test', function (RequestInterface $request, ResponseInterface $response, array $args) {
    $data = ['status' => 200, 'message' => 'Test route'];
    return createJsonResponse($response, $data);
});

// Interceptar todas las rutas no definidas 
$app->any('{routes:.+}', function (RequestInterface $request, ResponseInterface $response) {
    $data = [
        'status' => 404,
        'message' => 'Route not found'
    ];
    return createJsonResponse($response->withStatus(404), $data);
});
