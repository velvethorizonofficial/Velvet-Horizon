<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $to = "yourstoreemail@example.com"; // 🔹 Change to your email
    $subject = "New Order: $product";
    $message = "
    Product: $product\n
    Price: ₹$price\n
    Name: $name\n
    Email: $email\n
    Address: $address
    ";
    $headers = "From: orders@velvethorizon.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "✅ Your order has been placed. We'll contact you soon!";
    } else {
        echo "❌ Order failed. Please try again.";
    }
}
?>
