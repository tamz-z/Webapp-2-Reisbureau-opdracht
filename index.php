<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Agent Vista</title>
</head>

<body>
    <?php include "header.php"; ?>


    <img src="assets/beachvilla.jpg" alt="Beach Villa">
    <div class="header-text">
        <h2>Grab the deal & make it real!</h2>
    </div>
    <div class="review">
        <h4>We krijgen een 3.9 uit 5 op Trustpilot</h4>
    </div>
    <img src="assets/trustpilot.png" class="trust">

    <div class="review-2">
        <h4>op basis van 2000 klantbeoordelingen</h4>
        </h4>
    </div>

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
            <h2>Top Bestemmingen</h2>
        </div>
        <img src="assets/retangle.png" class="retangle3">
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/ibiza.jpg" alt="image">
                </div>
                <div class="content">
                    <h3>Ibiza</h3>

                </div>
            </div>
            <div class="box">
                <img src="assets/kreta.jpg" class="image-kreta">
                <div class="content">
                    <h3>Kreta</h3>
                </div>
                <form action="boekingen.php" method="get">
                    <button type="submit">Grab the deal !</button>
                </form>
            </div>
        </div>
    </section>


    <script src="script.js"></script>
</body>

</html>