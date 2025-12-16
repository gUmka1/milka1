<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'milka_cms');

// Application configuration
// Detect environment automatically
if (isset($_SERVER['VERCEL_URL'])) {
    // Vercel environment
    define('APP_URL', 'https://' . $_SERVER['VERCEL_URL']);
} else {
    // Local development environment
    define('APP_URL', 'http://localhost:8080/milka');
}
define('STORAGE_PATH', __DIR__ . '/../storage/uploads');

// Session configuration
define('SESSION_LIFETIME', 3600); // 1 hour
?>