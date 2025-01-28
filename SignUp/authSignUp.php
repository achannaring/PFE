<?php
require '../Main/DatabaseConnection.php'; // Include the database connection file
session_start(); // Start the session to store messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate passwords
    if ($password !== $confirm_password) {
        $_SESSION['message'] = "Passwords do not match.";
        $_SESSION['message_type'] = "error"; // Set message type for styling
        header("Location: index.php"); // Redirect to the signup page
        exit();
    }

    // Check if the username already exists in the database (email can be repeated)
    $stmt = $pdo->prepare("SELECT * FROM users WHERE TRIM(username) = :username");
    $stmt->execute([
        ':username' => $username
    ]);

    // If a user with the same username already exists
    if ($stmt->rowCount() > 0) {
        $_SESSION['message'] = "Error: Username already exists.";
        $_SESSION['message_type'] = "error"; // Set message type for styling
        header("Location: index.php"); // Redirect to the signup page
        exit();
    }

    // Determine role (by default 'user', you can extend this logic to allow admins)
    $role = 'user'; // Default role is 'user'
    // You can add logic to assign 'admin' here if needed, for example:
    // if ($_POST['role'] == 'admin') { $role = 'admin'; }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Insert user into the database, including the role
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashed_password,
            ':role' => $role // Insert the role (default is 'user')
        ]);

        $_SESSION['message'] = "Sign up successful! You can now login.";
        $_SESSION['message_type'] = "success"; // Success message
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['message'] = "Error: " . $e->getMessage();
        $_SESSION['message_type'] = "error"; // Set message type for styling
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Invalid request method.";
    $_SESSION['message_type'] = "error";
    header("Location: index.php");
    exit();
}
?>
