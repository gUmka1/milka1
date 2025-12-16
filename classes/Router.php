<?php
/**
 * Simple router class for handling URL routing
 */
class Router {
    private $routes = [];
    private $basePath = '';
    
    /**
     * Constructor
     */
    public function __construct($basePath = '') {
        $this->basePath = rtrim($basePath, '/');
    }
    
    /**
     * Add a GET route
     */
    public function get($path, $callback) {
        $this->addRoute('GET', $path, $callback);
        return $this;
    }
    
    /**
     * Add a POST route
     */
    public function post($path, $callback) {
        $this->addRoute('POST', $path, $callback);
        return $this;
    }
    
    /**
     * Add a route
     */
    private function addRoute($method, $path, $callback) {
        $path = rtrim($this->basePath . '/' . trim($path, '/'), '/');
        if (empty($path)) {
            $path = '/';
        }
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'callback' => $callback
        ];
    }
    
    /**
     * Dispatch the route
     */
    public function dispatch() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestUri = rtrim($requestUri, '/');
        if (empty($requestUri)) {
            $requestUri = '/';
        }
        
        // Find matching route
        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestUri) {
                // Call the callback function
                if (is_callable($route['callback'])) {
                    return call_user_func($route['callback']);
                } elseif (is_string($route['callback'])) {
                    // If callback is a string, treat it as a file path
                    if (file_exists($route['callback'])) {
                        return require $route['callback'];
                    }
                }
                break;
            }
        }
        
        // No matching route found
        $this->notFound();
    }
    
    /**
     * Handle 404 Not Found
     */
    private function notFound() {
        http_response_code(404);
        echo "404 - Page not found";
    }
    
    /**
     * Redirect to a URL
     */
    public static function redirect($url) {
        header("Location: $url");
        exit;
    }
    
    /**
     * Get current URL
     */
    public static function currentUrl() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $uri = $_SERVER['REQUEST_URI'];
        return $protocol . '://' . $host . $uri;
    }
}
?>