<?php

$host = 'localhost';    // MySQL server
$dbname = 'roxine_db';  // Database name
$username = 'regalado'; // MySQL username (updated)
$password = 'newpassword'; // MySQL password (updated)

try {
    // Create PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

?>
