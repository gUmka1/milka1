<?php
require_once 'db.php';

class ServiceManager {
    private $pdo;
    
    public function __construct() {
        $this->pdo = getDBConnection();
    }
    
    // Get all services
    public function getAllServices() {
        if (!$this->pdo) return [];
        
        try {
            $stmt = $this->pdo->query("SELECT * FROM services ORDER BY created_at DESC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return [];
        }
    }
    
    // Get service by ID
    public function getServiceById($serviceId) {
        if (!$this->pdo) return null;
        
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM services WHERE service_id = ?");
            $stmt->execute([$serviceId]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return null;
        }
    }
    
    // Get service images
    public function getServiceImages($serviceId) {
        if (!$this->pdo) return [];
        
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM service_images WHERE service_id = ? ORDER BY sort_order ASC");
            $stmt->execute([$serviceId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return [];
        }
    }
    
    // Get service prices
    public function getServicePrices($serviceId) {
        if (!$this->pdo) return [];
        
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM service_prices WHERE service_id = ? ORDER BY sort_order ASC");
            $stmt->execute([$serviceId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return [];
        }
    }
    
    // Save or update service
    public function saveService($serviceId, $data) {
        if (!$this->pdo) return false;
        
        try {
            $stmt = $this->pdo->prepare("INSERT INTO services (service_id, title, content, category, meta_title, meta_description, meta_keywords, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE title = VALUES(title), content = VALUES(content), category = VALUES(category), meta_title = VALUES(meta_title), meta_description = VALUES(meta_description), meta_keywords = VALUES(meta_keywords), status = VALUES(status)");
            
            $stmt->execute([
                $serviceId,
                $data['title'] ?? '',
                $data['content'] ?? '',
                $data['category'] ?? '',
                $data['meta_title'] ?? '',
                $data['meta_description'] ?? '',
                $data['meta_keywords'] ?? '',
                $data['status'] ?? 'published'
            ]);
            
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
    
    // Save service images
    public function saveServiceImages($serviceId, $images) {
        if (!$this->pdo) return false;
        
        try {
            // First, delete existing images for this service
            $stmt = $this->pdo->prepare("DELETE FROM service_images WHERE service_id = ?");
            $stmt->execute([$serviceId]);
            
            // Then insert new images
            $stmt = $this->pdo->prepare("INSERT INTO service_images (service_id, image_path, image_type, caption, sort_order) VALUES (?, ?, ?, ?, ?)");
            
            foreach ($images as $image) {
                $stmt->execute([
                    $serviceId,
                    $image['path'] ?? '',
                    $image['type'] ?? 'main',
                    $image['caption'] ?? '',
                    $image['sort_order'] ?? 0
                ]);
            }
            
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
    
    // Save service prices
    public function saveServicePrices($serviceId, $prices) {
        if (!$this->pdo) return false;
        
        try {
            // First, delete existing prices for this service
            $stmt = $this->pdo->prepare("DELETE FROM service_prices WHERE service_id = ?");
            $stmt->execute([$serviceId]);
            
            // Then insert new prices
            $stmt = $this->pdo->prepare("INSERT INTO service_prices (service_id, option_name, price, sort_order) VALUES (?, ?, ?, ?)");
            
            foreach ($prices as $price) {
                $stmt->execute([
                    $serviceId,
                    $price['option_name'] ?? '',
                    $price['price'] ?? 0,
                    $price['sort_order'] ?? 0
                ]);
            }
            
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
    
    // Delete service
    public function deleteService($serviceId) {
        if (!$this->pdo) return false;
        
        try {
            $stmt = $this->pdo->prepare("DELETE FROM services WHERE service_id = ?");
            $stmt->execute([$serviceId]);
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
    
    // Import existing services from files
    public function importServicesFromFiles() {
        $serviceFiles = glob('../services/*.php');
        
        foreach ($serviceFiles as $file) {
            $filename = basename($file, '.php');
            if ($filename !== 'index') {
                // Check if service already exists in database
                $existingService = $this->getServiceById($filename);
                if (!$existingService) {
                    // Extract service name from file content (simplified approach)
                    $content = file_get_contents($file);
                    if (preg_match('/<h1[^>]*>(.*?)<\/h1>/i', $content, $matches)) {
                        $serviceName = trim(strip_tags($matches[1]));
                    } else {
                        $serviceName = ucfirst(str_replace('-', ' ', $filename));
                    }
                    
                    // Determine category based on filename (simplified approach)
                    $category = 'Услуга';
                    if (strpos($filename, 'manicure') !== false || strpos($filename, 'pedicure') !== false || strpos($filename, 'nail') !== false) {
                        $category = 'Ногтевой сервис';
                    } elseif (strpos($filename, 'hair') !== false || strpos($filename, 'coloring') !== false) {
                        $category = 'Парикмахерское искусство';
                    } elseif (strpos($filename, 'spa') !== false) {
                        $category = 'Косметология';
                    }
                    
                    // Save to database
                    $this->saveService($filename, [
                        'title' => $serviceName,
                        'content' => "Описание услуги {$serviceName}",
                        'category' => $category,
                        'meta_title' => "{$serviceName} | Muse | Салон красоты",
                        'meta_description' => "Профессиональная услуга {$serviceName} в салоне красоты Muse. Высококачественные материалы и опытные мастера.",
                        'meta_keywords' => strtolower($serviceName) . ", салон красоты, профессиональная услуга",
                        'status' => 'published'
                    ]);
                }
            }
        }
    }
}
?>