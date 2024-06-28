<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Agent Vista</title>
</head>

<body>
    <div class="container" id="signup">
        <h1 class="form-title">Log In</h1>
        <form method="post" action="index.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="E-Mail" required>
                <label for="fname">Voer je E-Mailadres in</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
                <label for="password">Wachtwoord</label>
            </div>
            <input type="submit" class="btn-2" value="Log In" name="signIn">
        </form>
        <div class="links">
    <p>Nog geen account?</p>
    <a href="register.php"><button id="signInButton">Registreer</button></a>
</div>


    </div>
    <script src="script.js"></script>
</body>

</html>