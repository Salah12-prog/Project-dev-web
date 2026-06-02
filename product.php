<?php
$conn = new mysqli("localhost", "root", "", "eshop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$age = $_POST['age'];
$wilaya = $_POST['wilaya'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

$sql = "INSERT INTO users (prenom, nom, age, wilaya, phone, email, address, password)
VALUES ('$prenom','$nom','$age','$wilaya','$phone','$email','$address','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: product.html");
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>