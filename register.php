<?php
session_start();
include 'connect.php';

// Handle registration
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Check if the email already exists
    $checkEmail = $conn->prepare("SELECT * FROM usersaccount WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        $error_message = "Emailadres bestaat al!";
    } else {
        // Insert new user into the database
        $insertQuery = $conn->prepare("INSERT INTO usersaccount (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $password);

        if ($insertQuery->execute()) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registreren - Agency Vista</title>
</head>
<body>
    <?php include "header.php"; ?>

    <div class="container" id="signup">
        <h1 class="form-title">Registreer</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="Voornaam" required>
                <label for="fName">Voer je voornaam in</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Achternaam" required>
                <label for="lName">Voer je achternaam in</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="E-Mail" required>
                <label for="email">Voer je E-Mailadres in</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
                <label for="password">Voer een wachtwoord in</label>
            </div>
            <input type="submit" class="btn" value="Registreer" name="signUp">
        </form>
        <div class="links">
            <p>Al een account?</p>
            <button id="signInButton" onclick="window.location.href='index.php'">Log In</button>
        </div>
    </div>

    <?php if (isset($error_message)): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <script src="script.js"></script>
</body>
</html>
