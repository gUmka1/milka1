<?php
/**
 * Installation routes
 */

// Bootstrap the application
require_once __DIR__ . '/../bootstrap/app.php';

// Create router instance
$router = new Router('/milka');

// Show installation page
$router->get('/install', function() {
    $controller = new InstallController();
    $controller->showInstallPage();
});

// Run installation
$router->post('/install/run', function() {
    $controller = new InstallController();
    $controller->install();
});

// Dispatch the route
$router->dispatch();
?>