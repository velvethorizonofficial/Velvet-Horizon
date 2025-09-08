<?php
$apiUrl = "https://sandbox.qikink.com/api/v1/products";
$apiKey = "47afa65bca4d75530e9ca4bf242c6b81472c60c7bacfa2a257fc9bf835c61f64";

$headers = [
  "Authorization: Bearer $apiKey",
  "Content-Type: application/json"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);

header("Content-Type: application/json");
echo $response;
