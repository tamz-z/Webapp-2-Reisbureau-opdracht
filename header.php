<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Agent Vista</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <img src="assets/vistalogo.png" class="logo">
            <a href="index.php">Home</a>
            <a href="booking.php">Boekingen</a>
            <a href="over.php">Over Ons</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['email'])) : ?>
                <a href="index.php?action=logout">Log Out</a>
            <?php else : ?>
                <a href="login.php">Login</a>
                <a href="register.php">Registreer</a>
            <?php endif; ?>
        </nav>
    </header>
</body>

</html>