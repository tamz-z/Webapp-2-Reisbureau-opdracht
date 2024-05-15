<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2>Formulier</h2>

    <form id="myForm">
        <label for="voornaam">Voornaam:</label><br>
        <input type="text" id="voornaam" name="voornaam"><br>
        <span id="voornaamError" class="error"></span><br>

        <label for="achternaam">Achternaam:</label><br>
        <input type="text" id="achternaam" name="achternaam"><br>
        <span id="achternaamError" class="error"></span><br>

        <label for="straatnaam">Straatnaam:</label><br>
        <input type="text" id="straatnaam" name="straatnaam"><br>
        <span id="straatnaamError" class="error"></span><br>

        <label for="huisnummer">Huisnummer:</label><br>
        <input type="text" id="huisnummer" name="huisnummer"><br>
        <span id="huisnummerError" class="error"></span><br>

        <input type="submit" value="Verstuur">
    </form>

    <script>
        function test() {
            console.log("Test button clicked");
        }

    </script>
</body>

</html>