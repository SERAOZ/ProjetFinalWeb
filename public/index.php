<?php
require_once '../core/router.php';
require_once '../core/request.php';
require_once '../core/response.php';
/**
 * Gelen istekleri alacak ve router'a iletecek
 */
$router = new Router(new Request, new Response);

$router->get('/', function($request, $response) {
    return $response->send('home.php');
});

$router->get('/user/login', function($request, $response) {
    // Login sayfasını göster
});

$router->post('/user/login', function($request, $response) {
    // Login işlemini işle
});

// Diğer route tanımlamaları...

$router->resolve();
?>