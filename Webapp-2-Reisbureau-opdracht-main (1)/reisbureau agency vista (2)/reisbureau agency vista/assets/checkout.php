<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the checkout process here
    // For example, save order to database, send email confirmation, etc.

    // Clear the basket after checkout
    $_SESSION['basket'] = array();
    echo "<p>Thank you for your order! Your basket is now empty.</p>";
} else {
    header('Location: index.php');
    exit;
}
?>