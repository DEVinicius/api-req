<?php
//API URL example
$url = "url";

//Array example
$data = json_encode([
    
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
