<?php
require_once "../Main/DatabaseConnection.php"; // Inclure la connexion

// Requête SQL pour récupérer les annonces avec leurs images
$sql = "SELECT r.*, 
        GROUP_CONCAT(ri.image_path ORDER BY ri.image_id SEPARATOR ',') AS images
        FROM rents r
        LEFT JOIN rental_images ri ON r.rent_id = ri.rent_id
        GROUP BY r.rent_id
        ORDER BY r.created_at DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rents = $stmt->fetchAll();

// Formater les images en tableau
foreach ($rents as &$rent) {
    $rent['images'] = $rent['images'] ? explode(',', $rent['images']) : [];
}

// Retourner les données en JSON
header('Content-Type: application/json');
echo json_encode($rents);
?>
