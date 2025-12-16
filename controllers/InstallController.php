<?php
/**
 * Installation Controller
 * Handles the installation process
 */
class InstallController {
    
    /**
     * Show the installation page
     */
    public function showInstallPage() {
        // Check if already installed
        if ($this->isInstalled()) {
            // Redirect to homepage
            header('Location: /');
            exit;
        }
        
        // Render installation view
        include BASE_PATH . '/views/install.php';
    }
    
    /**
     * Run the installation process
     */
    public function install() {
        // Check if already installed
        if ($this->isInstalled()) {
            // Redirect to homepage
            header('Location: /');
            exit;
        }
        
        $message = '';
        $error = '';
        
        try {
            // Initialize database tables
            initializeDatabase();
            
            $message = "Database tables created successfully!";
            
            // Check if admin user exists
            $db = DB::getInstance();
            $sql = "SELECT COUNT(*) as count FROM users";
            $result = $db->selectOne($sql);
            
            if ($result['count'] == 0) {
                $auth = new Auth();
                if ($auth->createDefaultAdmin()) {
                    $message .= " Default admin user created successfully!";
                } else {
                    $error = "Failed to create default admin user.";
                }
            }
            
            // Render installation view with results
            include BASE_PATH . '/views/install_result.php';
            
        } catch (Exception $e) {
            $error = "Error during installation: " . $e->getMessage();
            include BASE_PATH . '/views/install_result.php';
        }
    }
    
    /**
     * Check if the CMS is already installed
     */
    private function isInstalled() {
        try {
            $db = DB::getInstance();
            $sql = "SELECT COUNT(*) as count FROM users";
            $result = $db->selectOne($sql);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
?>