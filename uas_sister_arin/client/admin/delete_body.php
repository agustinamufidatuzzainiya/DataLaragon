<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://192.168.63.141:8000',
    'timeout' => 5
]);

// Include the id in the URL for DELETE requests
$endpoint = '/api/bodycare/' . $id;

try {
    $response = $client->request('DELETE', $endpoint);
    $statusCode = $response->getStatusCode();

    // Check if the request was successful (status code 2xx)
    if ($statusCode >= 200 && $statusCode < 300) {
        header('Location: bodycare.php');
        exit;
    } else {
        // Handle unsuccessful response (e.g., display an error message)
        echo 'Error: ' . $response->getBody();
    }
} catch (Exception $e) {
    // Handle exceptions (e.g., display an error message)
    echo 'Error: ' . $e->getMessage();
}
