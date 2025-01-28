<?php
$host = 'localhost'; // Database host
$dbname = 'rental_app'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password (update based on your setup)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
