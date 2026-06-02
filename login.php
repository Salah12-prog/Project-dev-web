<?php
session_start();

$conn = new mysqli("localhost", "root", "", "eshop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user'] = $user['prenom'];
    header("Location: index.html");
    exit;
} else {
    echo "Login error: Incorrect email or password";
}

$conn->close();
?>