<?php
require '../Main/DatabaseConnection.php'; // Include the database connection file
session_start(); // Start the session to store messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Check if both fields are filled
    if (empty($username) || empty($password)) {
        $_SESSION['message'] = "Please fill in all fields.";
        $_SESSION['message_type'] = "error";
        header("Location: index.php");
        exit();
    }

    try {
        // Fetch user by username
        $stmt = $pdo->prepare("SELECT * FROM users WHERE TRIM(username) = :username");
        $stmt->execute([':username' => $username]);

        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $stored_password = $user['password'];

            // Check if the password is hashed (basic assumption: if it starts with '$' or is long)
            if (strlen($stored_password) > 60 || strpos($stored_password, '$') === 0) {
                // Handle hashed passwords
                if (password_verify($password, $stored_password)) {
                    // Successful login
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['message'] = "Login successful! Welcome, " . $user['username'] . ".";
                    $_SESSION['message_type'] = "success";
                    header("Location: index.php");
                    exit();
                } else {
                    // Incorrect password
                    $_SESSION['message'] = "Incorrect username or password.";
                    $_SESSION['message_type'] = "error";
                    header("Location: index.php");
                    exit();
                }
            } else {
                // Handle plain-text passwords
                if ($password === $stored_password) {
                    // Successful login
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['message'] = "Login successful! Welcome, " . $user['username'] . ".";
                    $_SESSION['message_type'] = "success";
                    header("Location: index.php");
                    exit();
                } else {
                    // Incorrect password
                    $_SESSION['message'] = "Incorrect username or password.";
                    $_SESSION['message_type'] = "error";
                    header("Location: index.php");
                    exit();
                }
            }
        } else {
            // No user found with that username
            $_SESSION['message'] = "Incorrect username or password.";
            $_SESSION['message_type'] = "error";
            header("Location: index.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Error: " . $e->getMessage();
        $_SESSION['message_type'] = "error";
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
