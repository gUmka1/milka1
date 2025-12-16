<?php
/**
 * Web routes
 */

// Bootstrap the application
require_once __DIR__ . '/../bootstrap/app.php';

// Create router instance
$router = new Router('');

// Home page
$router->get('/', function() {
    // Include the original index.php content directly
    include_once __DIR__ . '/../index.php';
});

// Handle page requests
$router->get('/page/([a-zA-Z0-9\-]+)', function($slug) {
    $controller = new PageController();
    $controller->show($slug);
});

// Handle posts list
$router->get('/posts', function() {
    $controller = new PostController();
    $controller->index();
});

// Handle post requests
$router->get('/post/([a-zA-Z0-9\-]+)', function($slug) {
    $controller = new PostController();
    $controller->show($slug);
});

// Dispatch the route
$router->dispatch();
?>