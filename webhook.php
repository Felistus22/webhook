<?php
$my_verify_token = "superSecureWhatsAppToken123"; // Your chosen token

// Handle verification request
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hub_verify_token'])) {
    if ($_GET['hub_verify_token'] === $my_verify_token) {
        echo $_GET['hub_challenge'];
    } else {
        http_response_code(403);
        echo "Invalid verify token";
    }
}
?>
