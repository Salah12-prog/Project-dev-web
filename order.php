<?php
$conn = new mysqli("localhost", "root", "", "eshop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product_name  = $_POST['product_name'];
$reference     = $_POST['reference'];
$price         = $_POST['price'];
$quantity      = $_POST['quantity'];
$total_price   = $_POST['total_price'];
$client_name   = $_POST['client_name'];
$phone         = $_POST['phone'];
$address       = $_POST['address'];
$scent_type    = $_POST['scent_type'];

$sql = "INSERT INTO orders (product_name, reference, price, quantity, total_price, client_name, phone, address, scent_type)
VALUES ('$product_name', '$reference', '$price', '$quantity', '$total_price', '$client_name', '$phone', '$address', '$scent_type')";

if ($conn->query($sql) === TRUE) {
    echo "Order confirmed successfully! Thank you for your purchase.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>