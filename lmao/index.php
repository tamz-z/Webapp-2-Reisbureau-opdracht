<?php
session_start();
include 'connect.php';

// Handle logout
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Handle login
if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = $conn->prepare("SELECT * FROM usersaccount WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $password);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Niet Gevonden, Foute E-mail of Wachtwoord";
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
    <title>Agent Vista</title>
</head>

<body>
    <?php include "header.php"; ?>

    <img src="assets/beachvilla.jpg" alt="Beach Villa">
    <div class="header-text">
        <h2>Grab the deal & make it real!</h2>
    </div>
    <div class="vakantie">
        <h2>Vakantie Inspiratie</h2>
    </div>
    <img src="assets/retangle.png" class="retangle">
    <img src="assets/yacht.jpg" class="yacht">
    <img src="assets/palmbomen.jpg" class="palm">
    <img src="assets/manunderwater.png" class="water">
    <img src="assets/bali.jpg" class="bali">
    <img src="assets/cocktail.jpg" class="cocktail">
    <img src="assets/retangle.png" class="retangle2">
    <div class="welcome">
        <h2>Welkom bij Onze</h2>
        <h2>Services</h2>
    </div>
    <img src="assets/water.png" class="water2">
    <img src="assets/mountains.png" class="berg">
    <img src="assets/manhattan.png" class="ny">

    <section class="container-locatie">
        <div class="heading">
            <span>Locations</span>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/ibiza.jpg" alt="image">
                </div>
                <div class="content">
                    <h3>Ibiza, Spanje</h3>
                    <p>Ontdek de mooie stranden van Ibiza en de leuke tentjes.</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/kreta.jpg" alt="image">
                </div>
                <div class="content">
                    <h3>Kreta, Griekenland</h3>
                    <p>Ontdek de prachtige bezienswaardigheden en cultuur van Kreta.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="login-section">
        <?php if (isset($_SESSION['email'])) : ?>
            <div class="logged-in">
                <h2>Welcome, <?php echo $_SESSION['email']; ?></h2>
                <form method="get" action="">
                    <input type="hidden" name="action" value="logout">
                    <input type="submit" class="btn" value="Uitloggen">
                </form>
            </div>
        <?php else : ?>
            <div class="login-form">
                <h1 class="form-title">Log In</h1>
                <form method="post" action="">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="E-Mail" required>
                        <label for="email">Voer je E-Mailadres in</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
                        <label for="password">Wachtwoord</label>
                    </div>
                    <input type="submit" class="btn" value="Log In" name="signIn">
                </form>
                <div class="links">
                    <p>Nog geen account?</p>
                    <button id="signInButton" onclick="window.location.href='register.php'">Registreer</button>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php if (isset($error_message)) : ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <?php include "footer.php"; ?>
    <script src="script.js"></script>
</body>

</html>