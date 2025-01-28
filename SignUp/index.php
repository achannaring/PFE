<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Main/normalize.css">
    <link rel="stylesheet" href="SignUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="toggle">
            <div class="toggle-panel">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <a href="../Login/index.php"><button>Login</button></a>
            </div>
        </div>
        <div class="form-container">
            <form method="POST" action="authSignUp.php">
                <h1>Create Account</h1>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required minlength="8" maxlength="20">
                <input type="password" name="confirm_password" placeholder="Confirm password" required minlength="8" maxlength="20">
                <button type="submit">Sign Up</button>
                <!-- Display messages below the button -->
                <?php if (isset($_SESSION['message'])): ?>
                    <p style="
                        color: <?= $_SESSION['message_type'] === 'error' ? 'red' : 'green' ?>; 
                        ">
                        <?= $_SESSION['message'] ?>
                    </p>
                    <?php unset($_SESSION['message']); // Clear message after displaying ?>
                <?php endif; ?>


            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
