<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }

        if (!empty($phone) && !preg_match('/^\d{10}$/', $phone)) {
            echo "Invalid phone number format";
            exit;
        }

        $to = "your@email.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";
        $headers = "From: {$email}";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Please fill out all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactformulier</title>
  
</head>
<body>
<?php include "header.php"; ?>

<img style="width: 100%" src="assets/contact.jpg">
<div class="contact">
    <h5>NEEM CONTACT MET ONS OP</h5>
</div>
<div class="Contactblock">
    <div class="Contact1stehelft">
        <h4 style="color: #368296;">
            Agent Vista
        </h4>
        <h3 style="color: #66b0bd;">
            Is jouw betrouwbare reisbureau, gespecialiseerd in het bieden van uitzonderlijke reiservaringen.
            Ons team van experts staat klaar om je te ondersteunen met advies, reisplannen en antwoorden op al je vragen.
            We waarderen je feedback en streven ernaar om onze diensten continu te verbeteren.
            Heb je een probleem of heb je informatie nodig? Laat ons je helpen.
            Heb je tips, trucs of klachten? Voel je vrij om contact met ons op te nemen.
        </h3>
    </div>

    <div class="Contact2stehelft">
        <form class="contactform" action="contact.php" method="post" id="contactForm">
            <div>
                <label for="naam"><h3>Voornaam</h3></label>
                <input class="Balkcontact" type="text" id="naam" name="name" placeholder="jouw naam..">

                <label for="Anaam"><h3>Achternaam</h3></label>
                <input class="Balkcontact" type="text" id="Anaam" name="achternaam" placeholder="jouw achternaam..">

                <label for="email"><h3>Email</h3></label>
                <input class="Balkcontact" type="text" id="email" name="email" placeholder="jouw email..">

                <label for="phone"><h3>Telefoon</h3></label>
                <input class="Balkcontact" type="text" id="phone" name="phone" placeholder="jouw telefoonnummer..">
            </div>
            <label for="bericht"><h3>Bericht</h3></label>
            <textarea class="Balkcontact" id="bericht" name="message" placeholder="jouw bericht.." style="height:200px"></textarea>

            <div class="form-error" style="color:red; display:none;"></div>
            <input class="contactbutton" type="submit" value="Submit">
        </form>
    </div>
</div>

<script>
    document.getElementById("contactForm").addEventListener("submit", (event) => {
        const contactForm = event.target;
        if (!validateContactForm(contactForm)) {
            event.preventDefault();
            displayError(contactForm, 'Vul alle verplichte velden correct in.');
        }
    });

    function isValidEmail(email) {
        const emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        return emailRegex.test(email);
    }

    function isValidPhoneNumber(phone) {
        const phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phone);
    }

    function validateContactForm(contactForm) {
        const name = contactForm["name"].value;
        const email = contactForm["email"].value;
        const phone = contactForm["phone"].value;
        const message = contactForm["message"].value;

        if (!name || !email || !message) {
            return false;
        }

        if (!isValidEmail(email) || (phone && !isValidPhoneNumber(phone))) {
            return false;
        }

        return true;
    }

    function displayError(formElement, message) {
        const errorElement = formElement.getElementsByClassName("form-error")[0];
        errorElement.innerHTML = message;
        errorElement.style.display = "block";
    }
</script>
</body>
</html>

