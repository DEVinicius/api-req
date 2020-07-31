<?php
//API URL example
$url = "https://eearncash.info/smm-api/database/createOrder";

//Array example
$data = json_encode([
    "id" => 243434664699500443,
    "type" => "like",
    "link" => "ssss",
    "image" => "ddd",
    "quantity" => 1,
    "gender" => "male",
    "location" => "qqq",
    "is_advertiser" => 1,
    "status" => "dddd",
    "payment_status" => "Pagamento Pendente",
    "announcement_service_id" => 1,
    "user_id" => 1,
    "limit" => "ff",
    "ad_in_moderation" => "Aceito",
    "order_id" => 1
]);

// Create a new cURL resource
$ch = curl_init($url);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

print_r($result);

// Close cURL resource
curl_close($ch);
