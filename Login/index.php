<?php session_start(); // Start the session to access messages ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Main/normalize.css">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="toggle">
            <div class="toggle-panel">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                <a href="../SignUp/index.php"><button>Sign Up</button></a>
            </div>
        </div>
        <div class="form-container">
            <form method="POST" action="authLogin.php">
                <h1>Login</h1>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit">Login</button>
                <?php if (isset($_SESSION['message'])): ?>
                    <p style="
                        color: <?= $_SESSION['message_type'] === 'error' ? 'red' : 'green' ?>; 
                    ">
                        <?= $_SESSION['message'] ?>
                    </p>
                    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>