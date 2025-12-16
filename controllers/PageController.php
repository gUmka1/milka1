<?php
/**
 * Page Controller
 * Handles displaying pages on the frontend
 */
class PageController {
    private $db;
    
    public function __construct() {
        $this->db = DB::getInstance();
    }
    
    /**
     * Display a page by slug
     */
    public function show($slug) {
        // Get page by slug
        $sql = "SELECT * FROM pages WHERE slug = ? AND status = 'published' LIMIT 1";
        $page = $this->db->selectOne($sql, [$slug]);
        
        if (!$page) {
            // Page not found
            http_response_code(404);
            include BASE_PATH . '/views/errors/404.php';
            return;
        }
        
        // Render page view
        include BASE_PATH . '/views/page.php';
    }
}
?>