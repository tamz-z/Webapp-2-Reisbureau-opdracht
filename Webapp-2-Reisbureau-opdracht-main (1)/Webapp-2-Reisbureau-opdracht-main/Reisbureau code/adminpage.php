<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Vista Admin</title>
    <link rel="stylesheet" href="css/Booking.css">
</head>
<body>

<?php include "header.php"; ?>

<section class="admin">
    <div class="top-menu">
        <button class="dashboard-toggle">Dashboard</button>
        <input type="text" placeholder="Search..." class="search-bar">
    </div>

    <div class="pos-data">
    <aside class="sidebar">
        <div class="user-avatar">
            <p>Admin</p>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="#users">Gebruiker</a></li>
                <li><a href="#travels">Vluchten</a></li>
                <li><a href="#purchases">Aankopen</a></li>
                <li><a href="#messages">Berichten</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <section id="users" class="tab-content">
            <h2 style="font-size: 30px">Gebruiker gegevens </h2>
            <div>
                <h2>Naam  </h2>
                <h2>Email  </h2>
                <h2>Wachtwoord  </h2>
                <h2>Telefoonnummer   </h2>
                <h2>Woonplaats   </h2>
            </div>

        </section>
        <section id="travels" class="tab-content">
            <h2 style="font-size: 30px ">Vlucht Informatie</h2>

        </section>
        <section id="purchases" class="tab-content">
            <h2 style="font-size: 30px ">Aankopen geschiedenis</h2>

        </section>
        <section id="messages" class="tab-content">
            <h2 style="font-size: 30px ">Berichten</h2>

        </section>
    </main>
    </div>
</section>

<?php include "footer.php"; ?>

<script>
    document.querySelectorAll('.navigation a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('.tab-content').forEach(section => {
                section.style.display = 'none';
            });
            document.querySelector(link.getAttribute('href')).style.display = 'block';
        });
    });
    document.querySelector('.navigation a').click();
</script>

</body>
</html>
