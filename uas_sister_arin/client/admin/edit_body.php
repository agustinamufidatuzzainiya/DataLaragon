<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$id = $_GET['id'];


$client = new Client([
    'base_uri' => 'http://192.168.63.141:8000',
    'timeout' => 5
]);

$response = $client->request('PUT', "/api/bodycare/", [
    'json' => [
        'id' => $id,
        'merk' => $_POST['merk'],
        'gambar' => $_POST['gambar'],
        'jenis' => $_POST['jenis'],
        'harga' =>  $_POST['harga'],
        'detail' =>  $_POST['detail'],
    ]
]);

$body = $response->getBody();
header('location:bodycare.php')
?>