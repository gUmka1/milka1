<?php
/**
 * Initialize the CMS
 * Creates database tables and default admin user
 */

// Bootstrap the application
require_once __DIR__ . '/bootstrap/app.php';

echo "Initializing CMS...\n";

// Initialize database tables
$db = DB::getInstance();
$pdo = $db->getConnection();

try {
    echo "Creating database tables...\n";
    
    // Create users table
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        role ENUM('admin', 'editor') DEFAULT 'editor',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");
    echo "  - users table created\n";
    
    // Create pages table
    $pdo->exec("CREATE TABLE IF NOT EXISTS pages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        slug VARCHAR(255) UNIQUE NOT NULL,
        content TEXT,
        meta_title VARCHAR(255),
        meta_description TEXT,
        status ENUM('draft', 'published') DEFAULT 'draft',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");
    echo "  - pages table created\n";
    
    // Create posts table
    $pdo->exec("CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        slug VARCHAR(255) UNIQUE NOT NULL,
        content TEXT,
        meta_title VARCHAR(255),
        meta_description TEXT,
        status ENUM('draft', 'published') DEFAULT 'draft',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");
    echo "  - posts table created\n";
    
    // Create categories table
    $pdo->exec("CREATE TABLE IF NOT EXISTS categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        slug VARCHAR(100) UNIQUE NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");
    echo "  - categories table created\n";
    
    // Create post_categories table
    $pdo->exec("CREATE TABLE IF NOT EXISTS post_categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        post_id INT NOT NULL,
        category_id INT NOT NULL,
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
        FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
        UNIQUE KEY unique_post_category (post_id, category_id)
    )");
    echo "  - post_categories table created\n";
    
    // Create media table
    $pdo->exec("CREATE TABLE IF NOT EXISTS media (
        id INT AUTO_INCREMENT PRIMARY KEY,
        filename VARCHAR(255) NOT NULL,
        original_name VARCHAR(255) NOT NULL,
        mime_type VARCHAR(100) NOT NULL,
        size INT NOT NULL,
        path VARCHAR(500) NOT NULL,
        uploaded_by INT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (uploaded_by) REFERENCES users(id) ON DELETE CASCADE
    )");
    echo "  - media table created\n";
    
    // Create default admin user if none exists
    $auth = new Auth();
    if ($auth->createDefaultAdmin()) {
        echo "  - default admin user created (username: admin, password: admin)\n";
    } else {
        echo "  - admin user already exists\n";
    }
    
    echo "CMS initialization completed successfully!\n";
    echo "You can now access the admin panel at: http://localhost:8080/milka/admin/login\n";
    echo "Login with username 'admin' and password 'admin' (change this after first login)\n";
    
} catch (PDOException $e) {
    echo "Error initializing CMS: " . $e->getMessage() . "\n";
    exit(1);
}
?>