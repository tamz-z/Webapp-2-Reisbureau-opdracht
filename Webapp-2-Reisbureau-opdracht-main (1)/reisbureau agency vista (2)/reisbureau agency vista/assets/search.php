<?php
include 'connect.php';

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Escape special characters for security
    $search_query = mysqli_real_escape_string($conn, $search_query);

    // Query the database for matching destinations
    $sql = "SELECT * FROM destinations WHERE name LIKE '%$search_query%'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='destination'>";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . $row['description'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
}
