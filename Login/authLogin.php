<?php
require '../Main/DatabaseConnection.php'; // Inclusion de la connexion à la base de données
session_start(); // Démarrer la session pour stocker les messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Vérification si les champs sont remplis
    if (empty($username) || empty($password)) {
        $_SESSION['message'] = "Veuillez remplir tous les champs.";
        $_SESSION['message_type'] = "error";
        header("Location: index.php");
        exit();
    }

    try {
        // Rechercher l'utilisateur dans la base de données
        $stmt = $pdo->prepare("SELECT user_id, username, password FROM users WHERE TRIM(username) = :username");
        $stmt->execute([':username' => $username]);

        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérification du mot de passe
            if (password_verify($password, $user['password'])) {
                // Connexion réussie
                $_SESSION['user_id'] = $user['user_id']; // Enregistrer l'ID de l'utilisateur
                $_SESSION['username'] = $user['username']; // Enregistrer le nom d'utilisateur
                $_SESSION['message'] = "Connexion réussie ! Bienvenue, " . $user['username'] . ".";
                $_SESSION['message_type'] = "success";
                
                // Redirection vers la page d'accueil
                header("Location: ../HomePage/homepage.php");
                exit();
            } else {
                $_SESSION['message'] = "Nom d'utilisateur ou mot de passe incorrect.";
                $_SESSION['message_type'] = "error";
                header("Location: index.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Nom d'utilisateur ou mot de passe incorrect.";
            $_SESSION['message_type'] = "error";
            header("Location: index.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Erreur : " . $e->getMessage();
        $_SESSION['message_type'] = "error";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Méthode de requête invalide.";
    $_SESSION['message_type'] = "error";
    header("Location: index.php");
    exit();
}
?>
