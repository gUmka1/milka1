<?php
// Test if component files are accessible
$component_files = [
    'components/header.html',
    'components/footer.html',
    'components/mobile-menu.html',
    'components/modal.html'
];

echo "<h1>Component File Access Test</h1>";

foreach ($component_files as $file) {
    echo "<h2>Testing: $file</h2>";
    
    if (file_exists($file)) {
        echo "<p style='color: green;'>✓ File exists</p>";
        
        // Try to read the file
        $content = file_get_contents($file);
        if ($content !== false) {
            echo "<p style='color: green;'>✓ File readable</p>";
            echo "<p>File size: " . strlen($content) . " bytes</p>";
        } else {
            echo "<p style='color: red;'>✗ File not readable</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ File does not exist</p>";
    }
    
    echo "<hr>";
}
?>