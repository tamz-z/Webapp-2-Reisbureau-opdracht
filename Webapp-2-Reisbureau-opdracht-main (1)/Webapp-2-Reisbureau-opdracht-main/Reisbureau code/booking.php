<?php
session_start();

$products = [
    1 => ["name" => "Spanje Tour", "price" => 250.00, "image" => "spanje vakantie.jpg"],
    2 => ["name" => "Turkije", "price" => 300.00, "image" => "turkijevakantie.jpg"],
    3 => ["name" => "Portugal", "price" => 275.00, "image" => "portugalvakantie.jpg"],
    4 => ["name" => "Griekenland", "price" => 280.00, "image" => "griekenlandvakantie.jpg"],
    5 => ["name" => "Zwitserland", "price" => 300.00, "image" => "Autovakantie-Zwitserland_01_D.jpg"],
    6 => ["name" => "Zweden", "price" => 250.00, "image" => "zweden.jpg"],
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id']) && isset($products[$_GET['id']])) {
    $productId = $_GET['id'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$productId] = ['quantity' => 1, 'name' => $products[$productId]['name'], 'price' => $products[$productId]['price']];
    }
    header('Location: index.php');
    exit();
}

if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id']) && isset($_SESSION['cart'][$_GET['id']])) {
    $productId = $_GET['id'];
    unset($_SESSION['cart'][$productId]);
    header('Location: cart.php');
    exit();
}

function getDescription($name) {
    switch ($name) {
        case "Spanje Tour":
            return "Beleef de Spaanse zon";
        case "Turkije":
            return "Ontdek Turkije";
        case "Portugal":
            return "Betoverend Portugal";
        case "Griekenland":
            return "Fascinerend Griekenland";
        case "Zwitserland":
            return "Adembenemend Zwitserland";
        case "Zweden":
            return "Verken Zweden";
        default:
            return "";
    }
}

function getDescriptionDetail($name, $price) {
    switch ($name) {
        case "Spanje Tour":
            return "Ervaar een perfecte mix van zonnige stranden, rijke cultuur, heerlijke gastronomie en bruisend nachtleven. Dit onvergetelijke avontuur kan van jou zijn voor slechts €" . number_format($price, 2) . "!";
        case "Turkije":
            return "Geniet van schitterende kustlijnen, eeuwenoude geschiedenis, levendige markten en heerlijke culinaire tradities. Dit onvergetelijke avontuur is beschikbaar voor slechts €" . number_format($price, 2) . "!";
        case "Portugal":
            return "Ontdek schilderachtige kustdorpen, rijke geschiedenis, voortreffelijke keuken en warme gastvrijheid. Beleef dit alles voor slechts €" . number_format($price, 2) . "!";
        case "Griekenland":
            return "Verken adembenemende eilanden, indrukwekkende oude ruïnes, heerlijke mediterrane keuken en levendige cultuur. Voor slechts €" . number_format($price, 2) . " kun je dit allemaal beleven!";
        case "Zwitserland":
            return "Geniet van de spectaculaire Alpenlandschappen, serene meren, charmante steden en eersteklas ski-resorts. Dit alles is van jou voor slechts €" . number_format($price, 2) . "!";
        case "Zweden":
            return "Ontdek uitgestrekte bossen, kristalheldere meren, kleurrijke steden en een rijke cultuur. Beleef deze onvergetelijke ervaring voor slechts €" . number_format($price, 2) . "!";
        default:
            return "";
    }
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
</head>
<body>

<?php include "header.php"; ?>

<section class="booking">
    <h1 class="heading-title">boek nu je vakantie!</h1>
    <form method="post" class="book-form">
        <div class="flex">
            <div class="inputBoks">
                <span>naam :</span>
                <input type="text" placeholder="Vul in je naam" name="name" required>
            </div>
            <div class="inputBoks">
                <span>Email :</span>
                <input type="email" placeholder="Vul in je email" name="email" required>
            </div>
            <div class="inputBoks">
                <span>Telefoon :</span>
                <input type="number" placeholder="Vul in je nummer" name="phone" required>
            </div>
            <div class="inputBoks">
                <span>Adres :</span>
                <input type="text" placeholder="Vul in je address" name="address" required>
            </div>
            <div class="inputBoks">
                <span>waar heen :</span>
                <select placeholder="place you want to visit" name="location" required>
                    <option value="Spanje">Spanje</option>
                    <option value="Griekenland">Griekenland</option>
                    <option value="Zwitserland">Zwitserland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Turkije">Turkije</option>
                    <option value="Zweden">Zweden</option>
                </select>
            </div>
            <div class="inputBoks">
                <span>hoeveel persoonen gaan er mee :</span>
                <input type="number" placeholder="vul in de hoe veelheid" name="guests" required>
            </div>
            <div class="inputBoks">
                <span>aankomst :</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBoks">
                <span>vertrek :</span>
                <input type="date" name="leaving" required>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="packages">
    <h1 class="heading-title">top bestemmingen</h1>
    <div class="boks-container">
        <?php foreach ($products as $id => $product): ?>
            <div class="boks">
                <div class="image">
                    <img src="assets/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                </div>
                <div class="content">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo getDescription($product['name']); ?></p>
                    <h2><?php echo getDescriptionDetail($product['name'], $product['price']); ?></h2>
                    <a href="winkelmandje.php?action=add&id=<?php echo $id; ?>" class="btn">Toevoegen aan winkelmandje</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include "footer.php"; ?>

</body>
</html>
