<?php
session_start();
include 'connect.php';

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
    exit;
}

if (!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = array();
}

$allowed_destinations = ['Turkije', 'Portugal', 'Zwitserland', 'Griekenland', 'Spanje'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $_SESSION['basket'][] = array('id' => $id, 'name' => $name, 'description' => $description);
    header('Location: index.php');
    exit;
}
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

<!--- Zoek Balk --->
<form action="index.php" method="GET" class="search-form">
    <input type="text" name="query" class="search-bar" placeholder="Zoek naar onze bestemmingen">
    <button type="submit" class="search-btn">Zoeken</button>
</form>

<?php
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    $search_query = mysqli_real_escape_string($conn, $search_query);

    $sql = "SELECT * FROM destinations WHERE name IN ('" . implode("','", $allowed_destinations) . "') AND (name LIKE '%$search_query%' OR description LIKE '%$search_query%')";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div class='search-results'>";
        echo "<div class='results-container'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='destination'>";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . $row['description'] . "</p>";
            echo "<form method='POST' action='index.php'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<input type='hidden' name='name' value='" . $row['name'] . "'>";
            echo "<input type='hidden' name='description' value='" . $row['description'] . "'>";
            echo "<button type='submit' name='order'>Order</button>";
            echo "</form>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p>No results found.</p>";
    }
}
?>

<img src="assets/beachvilla.jpg" alt="Beach Villa">
<div class="header-text">
    <h2>Grab the deal & make it real!</h2>
</div>
<img src="assets/trustpilot.png" class="trust">

<div class="review-2">
    <h4>op basis van 2000 klantbeoordelingen</h4>
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
            <form action="booking.php" method="get">
                <button class="button" type="submit">Grab the deal !</button>
            </form>
            <form action="booking.php" method="get">
                <button class="button-2" type="submit">Grab the deal !</button>
            </form>
            <div class="review">
                <h4>We krijgen een 3.9 uit 5 op Trustpilot</h4>
            </div>
        </div>
    </div>
</section>

<section class="basket">
    <h2>Mandje</h2>
    <?php
    if (!empty($_SESSION['basket'])) {
        echo "<ul>";
        foreach ($_SESSION['basket'] as $item) {
            echo "<li>" . $item['name'] . ": " . $item['description'] . "</li>";
        }
        echo "</ul>";
        echo "<form method='POST' action='checkout.php'>";
        echo "<button type='submit'>Proceed to Checkout</button>";
        echo "</form>";
    } else {
        echo "<p>Your basket is empty.</p>";
    }
    ?>
</section>
</body>

</html>