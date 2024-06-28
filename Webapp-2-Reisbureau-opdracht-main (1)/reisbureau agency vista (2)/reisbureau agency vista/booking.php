<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destination = $_POST['destination'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Escape special characters for security
    $destination = mysqli_real_escape_string($conn, $destination);
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);

    // Insert booking data into the database
    $sql = "INSERT INTO bookings (destination, name, email, phone) VALUES ('$destination', '$name', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Booking</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="booking">
        <h1 class="heading-title">Boek nu je vakantie!</h1>
        <form method="post" class="book-form">
            <div class="flex">
                <div class="inputBoks">
                    <span>Volledige Naam :</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputBoks">
                    <span>E-mail :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputBoks">
                    <span>Telefoonnummer :</span>
                    <input type="number" placeholder="enter your number" name="phone" required>
                </div>
                <div class="inputBoks">
                    <span>Adres :</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                <div class="inputBoks">
                    <span>Bestemming :</span>
                    <select placeholder="place you want to visit" name="destination" required>
                        <option value="Spanje">Spanje</option>
                        <option value="Griekenland">Griekenland</option>
                        <option value="Zwitserland">Zwitserland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Turkije">Turkije</option>
                    </select>
                </div>
                <div class="inputBoks">
                    <span>Hoeveel Personen :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div>
                <div class="inputBoks">
                    <span>Aankomst </span>
                    <input type="date" name="arrivals" required>
                </div>
                <div class="inputBoks">
                    <span>Vertrek :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>
            <input type="submit" value="Verzenden" class="btn" name="send">
        </form>
        <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
        <section class="packages">
            <h1 class="heading-title">Top Bestemmingen</h1>
            <div class="boks-container">
                <div class="boks">
                    <div class="image">
                        <img src="assets/spanje%20vakantie.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Spanje Tour </h3>
                        <p>Een vakantie in Spanje</p>
                        <h2>Het biedt een perfecte mix van zonnige stranden, rijke cultuur, heerlijke gastronomie en bruisend nachtleven, ideaal voor een onvergetelijke reiservaring.
                        </h2>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <div class="boks">
                    <div class="image">
                        <img src="assets/turkijevakantie (1).jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Turkije</h3>
                        <p>Een vakantie in Turkije</p>
                        <h2>combineert schitterende kustlijnen, eeuwenoude geschiedenis, levendige markten en heerlijke culinaire tradities voor een onvergetelijk avontuur.
                        </h2>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <div class="boks">
                    <div class="image">
                        <img src="assets/portugalvakantie.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Portugal</h3>
                        <p>Portugal betovert </p>
                        <h2>reizigers met zijn schilderachtige kustdorpen, rijke geschiedenis, voortreffelijke keuken en warme gastvrijheid, wat zorgt voor een onvergetelijke ervaring.</h2>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <div class="boks">
                    <div class="image">
                        <img src="assets/griekenlandvakantie.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Griekenland </h3>
                        <p>Griekenland fascineert </p>
                        <h2>bezoekers met zijn adembenemende eilanden, indrukwekkende oude ruïnes, heerlijke mediterrane keuken en levendige cultuur, wat zorgt voor een onvergetelijke ervaring.</h2>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <div class="boks">
                    <div class="image">
                        <img src="assets/Autovakantie-Zwitserland_01_D.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Zwistserland</h3>
                        <p>Zwitserland</p>
                        <h2>biedt bezoekers adembenemende Alpenlandschappen, serene meren, charmante steden en eersteklas ski-resorts, ideaal voor natuurliefhebbers en avonturiers.
                        </h2>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                <div class="boks">
                    <div class="image">
                        <img src="assets/zweden.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Zweden</h3>
                        <p>Zweden verwelkomt</p>
                        <h2>reizigers met uitgestrekte bossen, kristalheldere meren, kleurrijke steden en een rijke cultuur, wat een onvergetelijke ervaring belooft. </h2>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>