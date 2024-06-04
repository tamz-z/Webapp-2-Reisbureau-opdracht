<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHashed = md5($password);

    // Use prepared statements to prevent SQL injection
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        echo "Email Adres Bestaat Al!";
    } else {
        // Use prepared statements to prevent SQL injection
        $insertQuery = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $passwordHashed);

        if ($insertQuery->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHashed = md5($password);

    // Use prepared statements to prevent SQL injection
    $sql = $conn->prepare("SELECT * FROM usersaccount WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $passwordHashed);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        echo "Niet Gevonden, Foute E-mail of Wachtwoord";
    }
}
?>
