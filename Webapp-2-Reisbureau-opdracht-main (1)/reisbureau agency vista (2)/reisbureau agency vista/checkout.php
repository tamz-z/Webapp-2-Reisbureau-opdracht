<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $_SESSION['basket'] = array();
    echo "<p>Thank you for your order! Your basket is now empty.</p>";
} else {
    header('Location: index.php');
    exit;
}
?>