<?php
// Set the path to the file
$file = 'image/edu2.jpg'; // Make sure to update this path

// Check if the file exists
if (file_exists($file)) {
    // Set headers to download the file
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    
    // Clear the output buffer
    ob_clean();
    flush();
    
    // Read the file
    readfile($file);
    exit;
} else {
    // File not found
    echo "The requested file does not exist.";
}
?>