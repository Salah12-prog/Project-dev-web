<?php
if (isset($_POST['envoyer'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $connexion = new mysqli("localhost", "root", "", "eshop");

    if ($connexion->connect_error) {
        die("Connection failed: " . $connexion->connect_error);
    }

    $sql = "INSERT INTO messages (name, email, message)
            VALUES ('$nom', '$email', '$message')";

    if ($connexion->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $connexion->error;
    }

    $connexion->close();
}
?>