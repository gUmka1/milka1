<?php
// Script to update all service files to use absolute paths

$serviceDir = __DIR__ . '/services';
$files = glob($serviceDir . '/*.php');

foreach ($files as $file) {
    // Skip the index.php file as we've already updated it
    if (basename($file) === 'index.php') {
        continue;
    }
    
    $content = file_get_contents($file);
    
    // Replace relative paths with absolute paths
    $updatedContent = str_replace(
        ['include_once \'../includes/header.php\';', 'include_once \'../includes/footer.php\';'],
        ['include_once __DIR__ . \'/../includes/header.php\';', 'include_once __DIR__ . \'/../includes/footer.php\';'],
        $content
    );
    
    // Only write if changes were made
    if ($updatedContent !== $content) {
        file_put_contents($file, $updatedContent);
        echo "Updated: " . basename($file) . "\n";
    }
}

echo "All service files updated successfully!\n";
?>