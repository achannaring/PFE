<?php
session_start();
require '../Main/DatabaseConnection.php'; // Assurez-vous que le chemin est correct

if (isset($_SESSION['user_id'])) {
    try {
        // Vérifier si l'utilisateur existe dans la base de données
        $stmt = $pdo->prepare("SELECT user_id FROM users WHERE user_id = :user_id");
        $stmt->execute([':user_id' => $_SESSION['user_id']]);
        
        if ($stmt->rowCount() > 0) {
            // L'utilisateur existe en base de données, afficher "My Profile"
            echo '<li><a href="../Profile/Profile.php">My Profile</a></li>';
        } else {
            // L'utilisateur n'existe pas en base de données, afficher "Login"
            echo '<li><a href="../Login/index.php">Login</a></li>';
        }
    } catch (PDOException $e) {
        // En cas d'erreur SQL, afficher "Login"
        echo '<li><a href="../Login/index.php">Login</a></li>';
    }
} else {
    // Aucune session active, afficher "Login"
    echo '<li><a href="../Login/index.php">Login</a></li>';
}
?>