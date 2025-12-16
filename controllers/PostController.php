<?php
/**
 * Post Controller
 * Handles displaying blog posts on the frontend
 */
class PostController {
    private $db;
    
    public function __construct() {
        $this->db = DB::getInstance();
    }
    
    /**
     * Display all posts
     */
    public function index() {
        // Get all published posts
        $sql = "SELECT p.*, GROUP_CONCAT(c.name) as categories FROM posts p LEFT JOIN post_categories pc ON p.id = pc.post_id LEFT JOIN categories c ON pc.category_id = c.id WHERE p.status = 'published' GROUP BY p.id ORDER BY p.created_at DESC";
        $posts = $this->db->select($sql);
        
        // Render posts view
        include BASE_PATH . '/views/posts.php';
    }
    
    /**
     * Display a post by slug
     */
    public function show($slug) {
        // Get post by slug
        $sql = "SELECT p.*, GROUP_CONCAT(c.name) as categories FROM posts p LEFT JOIN post_categories pc ON p.id = pc.post_id LEFT JOIN categories c ON pc.category_id = c.id WHERE p.slug = ? AND p.status = 'published' GROUP BY p.id LIMIT 1";
        $post = $this->db->selectOne($sql, [$slug]);
        
        if (!$post) {
            // Post not found
            http_response_code(404);
            include BASE_PATH . '/views/errors/404.php';
            return;
        }
        
        // Render post view
        include BASE_PATH . '/views/post.php';
    }
}
?>