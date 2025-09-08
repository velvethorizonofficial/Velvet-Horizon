<?php
$url = "https://sandbox.qikink.com/api/token";

$data = [
  "client_id" => "583524424184728",
  "client_secret" => "0cb3fde2f70322fecc7a83ca0b9c6e5f54a1653fe245bd500bbd1a6468f2083f",
  "grant_type" => "client_credentials"
];

$headers = [
  "Content-Type: application/json"
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

header("Content-Type: application/json");
echo json_encode([
  "http_status" => $http_status,
  "response" => json_decode($response, true)
]);
