<?php
/**
 * Authentication class for handling user login/logout and session management
 */
class Auth {
    private $db;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->db = DB::getInstance();
    }
    
    /**
     * Attempt to authenticate a user
     */
    public function attempt($username, $password) {
        // Prepare SQL statement to prevent SQL injection
        $sql = "SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1";
        $user = $this->db->selectOne($sql, [$username, $username]);
        
        // Verify user exists and password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);
            
            // Store user data in session (excluding password)
            unset($user['password']);
            $_SESSION['user'] = $user;
            
            // Regenerate CSRF token
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            
            return true;
        }
        
        return false;
    }
    
    /**
     * Logout the current user
     */
    public function logout() {
        // Unset all session variables
        $_SESSION = [];
        
        // Delete the session cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        // Destroy the session
        session_destroy();
    }
    
    /**
     * Check if user is authenticated
     */
    public static function check() {
        return isset($_SESSION['user']);
    }
    
    /**
     * Get the currently authenticated user
     */
    public static function user() {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }
    
    /**
     * Check if the authenticated user has a specific role
     */
    public static function hasRole($role) {
        $user = self::user();
        return $user && $user['role'] === $role;
    }
    
    /**
     * Check if the authenticated user is an admin
     */
    public static function isAdmin() {
        return self::hasRole('admin');
    }
    
    /**
     * Hash a password
     */
    public static function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    /**
     * Middleware to require authentication
     */
    public static function requireAuth() {
        if (!self::check()) {
            Router::redirect('/');
        }
    }
    
    /**
     * Middleware to require admin role
     */
    public static function requireAdmin() {
        self::requireAuth();
        if (!self::isAdmin()) {
            Router::redirect('/');
        }
    }
    
    /**
     * Create a default admin user if none exists
     */
    public function createDefaultAdmin() {
        // Check if any users exist
        $sql = "SELECT COUNT(*) as count FROM users";
        $result = $this->db->selectOne($sql);
        
        if ($result['count'] == 0) {
            // No users exist, create default admin
            $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
            $hashedPassword = self::hashPassword('admin'); // Default password
            $this->db->insert($sql, ['admin', 'admin@example.com', $hashedPassword, 'admin']);
            return true;
        }
        
        return false;
    }
}
?>