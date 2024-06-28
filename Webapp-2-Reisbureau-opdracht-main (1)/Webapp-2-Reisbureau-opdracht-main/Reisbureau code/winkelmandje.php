<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Booking.css">
    <title>Winkelmandje</title>
</head>
<?php include "header.php"; ?>
<body>
<section style="" class="booking">
    <h1 class="heading-title">Winkelmandje</h1>
    <div class="book-form">
        <div class="flex">

<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<?php if (empty($_SESSION['cart'])): ?>
    <p>Uw winkelmandje is leeg.</p>
<?php else: ?>
    <ul>
        <?php foreach ($_SESSION['cart'] as $id => $product): ?>
            <li>
                <?php echo $product['name']; ?> - &euro;<?php echo number_format($product['price'], 2); ?> x <?php echo $product['quantity']; ?>
                <a class="btn" href="index.php?action=remove&id=<?php echo $id; ?>">Verwijderen</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p class="total">
        Totaal: &euro;<?php echo number_format(array_sum(array_map(function($product) { return $product['price'] * $product['quantity']; }, $_SESSION['cart'])), 2); ?>
    </p>
<?php endif; ?>
        </div>
        <input type="submit" value="submit" class="btn" name="book">
        </div>
</section>
<a class="btn" href="index.php">terug naar Home page</a>
</body>
</html>



