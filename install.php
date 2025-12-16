<?php
/**
 * Installation script
 * Creates database tables and default admin user
 */

// Bootstrap the application
require_once __DIR__ . '/bootstrap/app.php';

echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>CMS Installation</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <div class='container mt-5'>
        <div class='row justify-content-center'>
            <div class='col-md-8'>
                <div class='card'>
                    <div class='card-header'>
                        <h3 class='text-center'>CMS Installation</h3>
                    </div>
                    <div class='card-body'>";

echo "<h4>Installing CMS...</h4>";

try {
    echo "<p>Creating database tables...</p>";
    
    // Initialize database tables
    initializeDatabase();
    
    echo "<p class='text-success'>Database tables created successfully!</p>";
    
    // Check if admin user exists
    $db = DB::getInstance();
    $sql = "SELECT COUNT(*) as count FROM users";
    $result = $db->selectOne($sql);
    
    if ($result['count'] == 0) {
        echo "<p>Creating default admin user...</p>";
        $auth = new Auth();
        if ($auth->createDefaultAdmin()) {
            echo "<p class='text-success'>Default admin user created successfully!</p>";
            echo "<p><strong>Username:</strong> admin</p>";
            echo "<p><strong>Password:</strong> admin</p>";
            echo "<p class='text-warning'>Please change the password after first login!</p>";
        } else {
            echo "<p class='text-danger'>Failed to create default admin user.</p>";
        }
    } else {
        echo "<p>Admin user already exists.</p>";
    }
    
    echo "<div class='alert alert-info mt-4'>
            <h5>Installation Complete!</h5>
            <p>You can now access the admin panel:</p>
            <a href='/milka/admin/login' class='btn btn-primary'>Go to Admin Panel</a>
          </div>";
    
} catch (Exception $e) {
    echo "<p class='text-danger'>Error during installation: " . htmlspecialchars($e->getMessage()) . "</p>";
}

echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>";
?>