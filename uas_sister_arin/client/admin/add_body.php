<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $merk = $_POST['merk'] ?? '';
    $jenis = $_POST['jenis'] ?? '';
    $gambar=$_POST['gambar']??'';
    $harga = $_POST['harga'] ?? '';
    $detail = $_POST['detail'] ?? '';

   
    // Validasi sederhana
    if (empty($id) || empty($merk) || empty($jenis) || empty($gambar) ||empty($harga) || empty($detail)) {
        echo 'Semua field harus diisi.';
        exit;
    }

    try {
        $client = new Client([
            'base_uri' => 'http://192.168.63.141:8000',
            'timeout' => 5
        ]);

        $response = $client->request('POST', '/api/bodycare', [
            'json' => [
                'id' => $id,
                'merk' => $merk,
                'gambar' => $gambar,
                'jenis' => $jenis,
                'harga' => $harga,
                'detail' => $detail,
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            header('location: bodycare.php');
            exit;
        } else {
            echo 'Terjadi kesalahan pada server: ' . $response->getReasonPhrase();
            exit;
        }
    } catch (Exception $e) {
        echo 'Terjadi kesalahan: ' . $e->getMessage();
        exit;
    }
} else {
    echo 'Metode formulir yang diharapkan adalah POST.';
}
?>
