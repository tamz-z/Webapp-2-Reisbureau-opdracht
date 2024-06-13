<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'agencyvista');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        $_SESSION['success_message'] = "booked successfully.";
    } else {
        $_SESSION['success_message'] = "Error: " . $request . "<br>" . mysqli_error($connection);
    }

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/Booking.css">
    <script>
        $(document).ready(function(){
            $(".scroll-top").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });
        });
    </script>
</head>
<body>

<?php include "header.php"; ?>

<section class="booking">
    <h1 class="heading-title">book nu je vakantie!</h1>
    <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
        <div class="success-message"><?php echo $_SESSION['success_message']; ?></div>
        <?php unset($_SESSION['success_message']); ?>
    <?php } ?>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>volle name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>telefoon :</span>
                <input type="number" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>waar heen :</span>
                <select placeholder="place you want to visit" name="location" required>
                    <option value="Spanje">Spanje</option>
                    <option value="Griekenland">Griekenland</option>
                    <option value="Zwitserland">Zwitserland</option>
                    <option value="Portegal">Portugal</option>
                    <option value="Turkije">Turkije</option>
                </select>
            </div>
            <div class="inputBox">
                <span>hoe veel :</span>
                <input type="number" placeholder="number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>aankomst </span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>vetrek :</span>
                <input type="date" name="leaving" required>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<section class="packages">
    <h1 class="heading-title">top bestemingen</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="assets/spanje%20vakantie.jpg" alt="">
            </div>
            <div class="content">
                <h3>spanje Tour </h3>
                <p>Een vakantie in Spanje</p>
                <h2>Het biedt een perfecte mix van zonnige stranden, rijke cultuur, heerlijke gastronomie en bruisend nachtleven, ideaal voor een onvergetelijke reiservaring.
                </h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="assets/turkijevakantie.jpg" alt="">
            </div>
            <div class="content">
                <h3>turkije</h3>
                <p>Een vakantie in Turkije</p>
                <h2>combineert schitterende kustlijnen, eeuwenoude geschiedenis, levendige markten en heerlijke culinaire tradities voor een onvergetelijk avontuur.
                </h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="assets/portugalvakantie.jpg" alt="">
            </div>
            <div class="content">
                <h3>portugal</h3>
                <p>Portugal betovert </p>
                <h2>reizigers met zijn schilderachtige kustdorpen, rijke geschiedenis, voortreffelijke keuken en warme gastvrijheid, wat zorgt voor een onvergetelijke ervaring.</h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
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

        <div class="box">
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
        <div class="box">
            <div class="image">
                <img src="assets/zweden.jpg" alt="">
            </div>
            <div class="content">
                <h3>Zweden</h3>
                <p>Zweden verwelkomt</p>
                <h2>reizigers met uitgestrekte bossen, kristalheldere meren, kleurrijke steden en een rijke cultuur, wat een onvergetelijke ervaring belooft.                </h2>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>




    </div>



</section>

<?php include "footer.php"; ?>

</body>
</html>
