<?php
// Process booking form submission
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    
    // Simple validation
    if (empty($name) || empty($phone) || empty($service)) {
        echo json_encode(['success' => false, 'message' => 'Пожалуйста, заполните все поля']);
        exit;
    }
    
    // Validate phone number (simple validation)
    if (strlen($phone) < 10) {
        echo json_encode(['success' => false, 'message' => 'Пожалуйста, введите корректный номер телефона']);
        exit;
    }
    
    // Prepare booking data
    $booking_data = [
        'id' => uniqid(),
        'name' => $name,
        'phone' => $phone,
        'service' => $service,
        'timestamp' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ];
    
    // Ensure the storage directory exists
    $storage_dir = __DIR__ . '/storage';
    if (!is_dir($storage_dir)) {
        mkdir($storage_dir, 0755, true);
    }
    
    // Save to bookings.json (in a real app, this would be a database)
    $bookings_file = $storage_dir . '/bookings.json';
    
    // Read existing bookings
    $bookings = [];
    if (file_exists($bookings_file)) {
        $bookings_json = file_get_contents($bookings_file);
        $bookings = json_decode($bookings_json, true) ?: [];
    }
    
    // Add new booking
    $bookings[] = $booking_data;
    
    // Save updated bookings
    if (file_put_contents($bookings_file, json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        // Return success response
        echo json_encode(['success' => true, 'message' => 'Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Ошибка сохранения заявки. Пожалуйста, попробуйте еще раз.']);
    }
} else {
    // Not a POST request
    echo json_encode(['success' => false, 'message' => 'Неверный метод запроса']);
}
?>