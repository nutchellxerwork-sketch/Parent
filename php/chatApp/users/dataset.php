<?php
// Handshake Security: FranceS123
$secret = "RnJhbmNlUzEyMw==";

if (!defined('APP_KEY') || APP_KEY !== $secret) {
    header('HTTP/1.0 403 Forbidden');
    die("Hi! Access Denied. Handshake failed.");
}

// User Database
$all_users = [
    "admin" => ["password" => "admin123", "name" => "System Admin"],
    "user1" => ["password" => "pass123", "name" => "John Doe"]
];

// Chat Database
// Structured by [sender, receiver, message, timestamp]
$all_chats = [
    ["from" => "admin", "to" => "user1", "msg" => "Hi! Welcome to the AI chat.", "time" => "12:00"],
    ["from" => "user1", "to" => "admin", "msg" => "Thanks! Is this secure?", "time" => "12:01"],
    ["from" => "guest", "to" => "admin", "msg" => "I shouldn't see this.", "time" => "12:05"]
];
?>
