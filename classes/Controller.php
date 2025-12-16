<?php
/**
 * Base Controller class
 * Provides common functionality for all controllers
 */
class Controller {
    protected $db;
    protected $user;
    protected $csrfToken;
    
    /**
     * Constructor
     */
    public function __construct() {
        // Get database instance
        $this->db = DB::getInstance();
        
        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Get current user if logged in
        $this->user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        
        // Generate CSRF token if not exists
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        $this->csrfToken = $_SESSION['csrf_token'];
    }
    
    /**
     * Render a view file
     */
    protected function render($view, $data = []) {
        // Extract data to variables
        extract($data);
        
        // Start output buffering
        ob_start();
        
        // Include the view file
        $viewPath = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            throw new Exception("View file not found: $viewPath");
        }
        
        // Get the output and clean the buffer
        $content = ob_get_clean();
        
        // Return the rendered content
        return $content;
    }
    
    /**
     * Render the admin layout with content
     */
    protected function renderAdminLayout($title, $content, $activeMenu = '') {
        // Data to pass to the layout
        $data = [
            'title' => $title,
            'content' => $content,
            'user' => $this->user,
            'activeMenu' => $activeMenu,
            'csrfToken' => $this->csrfToken
        ];
        
        // Render the admin layout
        return $this->render('admin/layout', $data);
    }
    
    /**
     * Redirect to a URL
     */
    protected function redirect($url) {
        Router::redirect($url);
    }
    
    /**
     * Generate a slug from a string
     */
    protected function generateSlug($text) {
        // Convert to lowercase
        $text = strtolower($text);
        
        // Replace spaces and special characters with hyphens
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        
        // Remove leading and trailing hyphens
        $text = trim($text, '-');
        
        return $text;
    }
    
    /**
     * Validate CSRF token
     */
    protected function validateCsrfToken($token) {
        return hash_equals($_SESSION['csrf_token'], $token);
    }
    
    /**
     * Check if user is authenticated
     */
    protected function isAuthenticated() {
        return $this->user !== null;
    }
    
    /**
     * Check if user has a specific role
     */
    protected function hasRole($role) {
        return $this->isAuthenticated() && $this->user['role'] === $role;
    }
    
    /**
     * Check if user is admin
     */
    protected function isAdmin() {
        return $this->hasRole('admin');
    }
    
    /**
     * Require authentication
     */
    protected function requireAuth() {
        if (!$this->isAuthenticated()) {
            $this->redirect('/admin/login');
        }
    }
    
    /**
     * Require admin role
     */
    protected function requireAdmin() {
        $this->requireAuth();
        if (!$this->isAdmin()) {
            $this->redirect('/admin');
        }
    }
    
    /**
     * Send JSON response
     */
    protected function jsonResponse($data, $statusCode = 200) {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
    
    /**
     * Escape HTML output
     */
    protected function escape($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    
    /**
     * Get flash message from session and remove it
     */
    protected function getFlashMessage($key) {
        if (isset($_SESSION[$key])) {
            $message = $_SESSION[$key];
            unset($_SESSION[$key]);
            return $message;
        }
        return null;
    }
    
    /**
     * Set flash message in session
     */
    protected function setFlashMessage($key, $message) {
        $_SESSION[$key] = $message;
    }
    
    /**
     * Check if request method is POST
     */
    protected function isPostRequest() {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
    
    /**
     * Get request parameter
     */
    protected function getRequestParam($key, $default = null) {
        return $_REQUEST[$key] ?? $default;
    }
}
?>