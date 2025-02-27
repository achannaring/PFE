<?php
session_start();
require_once '../Main/DatabaseConnection.php';

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Login/index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et sécurisation des données
    $user_id = $_SESSION['user_id'];
    $owner_name = $_POST['ownerName'] ?? '';
    $owner_email = $_POST['ownerEmail'] ?? '';
    $owner_contact = $_POST['contact'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $city = 'Agadir'; // Valeur fixe
    $university = ''; // Modifier si nécessaire
    $budget = $_POST['price'] ?? 0;
    $property_type = $_POST['propertyType'] ?? '';
    $bedrooms = $_POST['bedrooms'] ?? 0;
    $bathrooms = $_POST['bathrooms'] ?? 0;
    $sqft = $_POST['sqft'] ?? 0;
    $neighborhood = $_POST['neighborhood'] ?? '';
    $address = $_POST['address'] ?? '';
    $latitude = $_POST['latitude'] ?? 0;
    $longitude = $_POST['longitude'] ?? 0;
    $features = $_POST['features'] ?? '';
    $availability = $_POST['availability'] ?? '';
    $duration = ''; // Modifier si nécessaire
    
    try {
        $sql = "INSERT INTO rents (user_id, owner_name, owner_email, owner_contact, title, description, city, university, budget, property_type, bedrooms, bathrooms, sqft, neighborhood, address, latitude, longitude, features, availability, duration) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $owner_name, $owner_email, $owner_contact, $title, $description, $city, $university, $budget, $property_type, $bedrooms, $bathrooms, $sqft, $neighborhood, $address, $latitude, $longitude, $features, $availability, $duration]);
        
        echo "Property added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>