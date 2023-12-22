<?php //include_once 'views/header.html';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?><link rel="stylesheet" href="../../../public/css/style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PROJET</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library, Bootstrap'tan önce gelmeli -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.js, tooltip ve popover için gereklidir -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="style.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/script.js"></script>    
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">CONNEXION</h2>
        <form action="/views/user/identification/loginPage.php" method="POST"> <!-- Formun işlendiği PHP dosyasını güncelleyin -->
            <div class="form-group">
                <label for="username" class="form-label">User Name :</label>
                <input type="text" id="userName" name="userName" class="form-input" required> <!-- 'name' özelliğini güncelleyin -->
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password :</label>
                <input type="password" id="password" name="password" class="form-input" required> 
            </div>
            <div class="form-group">
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>
            <p>Vous n'avez pas de compte ? <a class="signup-link" href="/views/user/register/registLoginPage.php" style="color: red;">Sign up</a></p>

    </div>
</body>
