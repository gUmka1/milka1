<?php
// Database initialization script
require_once 'config/db.php';

echo "Initializing database...\n";

// Try to create database if it doesn't exist
try {
    $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database
    $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
    echo "Database '" . DB_NAME . "' created or already exists.\n";
    
    // Connect to the database
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create services table
    $sql = "CREATE TABLE IF NOT EXISTS services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        service_id VARCHAR(100) UNIQUE NOT NULL,
        title VARCHAR(255) NOT NULL,
        content TEXT,
        category VARCHAR(100),
        meta_title VARCHAR(255),
        meta_description TEXT,
        meta_keywords TEXT,
        status ENUM('published', 'draft', 'archived') DEFAULT 'published',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    $pdo->exec($sql);
    echo "Table 'services' created or already exists.\n";
    
    // Create service_images table
    $sql = "CREATE TABLE IF NOT EXISTS service_images (
        id INT AUTO_INCREMENT PRIMARY KEY,
        service_id VARCHAR(100) NOT NULL,
        image_path VARCHAR(255) NOT NULL,
        image_type ENUM('main', 'process', 'result') DEFAULT 'main',
        caption VARCHAR(255),
        sort_order INT DEFAULT 0,
        FOREIGN KEY (service_id) REFERENCES services(service_id) ON DELETE CASCADE
    )";
    
    $pdo->exec($sql);
    echo "Table 'service_images' created or already exists.\n";
    
    // Create service_prices table
    $sql = "CREATE TABLE IF NOT EXISTS service_prices (
        id INT AUTO_INCREMENT PRIMARY KEY,
        service_id VARCHAR(100) NOT NULL,
        option_name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        sort_order INT DEFAULT 0,
        FOREIGN KEY (service_id) REFERENCES services(service_id) ON DELETE CASCADE
    )";
    
    $pdo->exec($sql);
    echo "Table 'service_prices' created or already exists.\n";
    
    echo "Database initialization completed successfully!\n";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>