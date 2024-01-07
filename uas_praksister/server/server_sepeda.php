<?php
error_reporting(1);
include "Database.php";
$abc = new Database();

if (isset($_SERVER['HTTP_ORIGIN'])) 
{
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') 
{
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
}

$postdata = file_get_contents("php://input");

function filter($data)
{
    $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
    return $data;
    unset($data);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $data = json_decode($postdata);
    $id_sepeda = $data->id_sepeda;
    $id_pemasok = $data->id_pemasok;
    $nama = $data->nama;
    $gambar_sepeda = $data->gambar_sepeda;
    $ukuran = $data->ukuran;
    $jenis = $data->jenis;
    $warna = $data->warna;
    $stok = $data->stok;
    $harga = $data->harga;
    $aksi = $data->aksi;

    if ($aksi == 'tambah-sepeda') 
    {
        $data2 = array(
            'id_sepeda' => $id_sepeda,
            'id_pemasok' => $id_pemasok,
            'nama' => $nama,
            'gambar_sepeda' => $gambar_sepeda,
            'ukuran' => $ukuran,
            'jenis' => $jenis,
            'warna' => $warna,
            'stok' => $stok,
            'harga' => $harga,
        );
        $abc->tambah_data_sepeda($data2);
    } 
    elseif ($aksi == 'ubah-sepeda') 
    {
        $data2 = array(
            'id_sepeda' => $id_sepeda,
            'id_pemasok' => $id_pemasok,
            'nama' => $nama,
            'gambar_sepeda' => $gambar_sepeda,
            'ukuran' => $ukuran,
            'jenis' => $jenis,
            'warna' => $warna,
            'stok' => $stok,
            'harga' => $harga,
        );
        $abc->ubah_data_sepeda($data2);
    } 
    elseif ($aksi == 'hapus-sepeda') 
    {
        $abc->hapus_data_sepeda($id_sepeda);
    }

    unset($postdata, $data, $data2, $id_sepeda, $id_pemasok, $nama, $gambar_sepeda, $ukuran, $jenis, $warna, $stok, $harga, $aksi, $abc);
} 

elseif ($_SERVER['REQUEST_METHOD'] == 'GET') 
{
    if (($_GET['aksi'] == 'tampil-sepeda') and (isset($_GET['id_sepeda']))) 
    {
        $id_sepeda = filter($_GET['id_sepeda']);
        $data = $abc->tampil_data_sepeda($id_sepeda);
        echo json_encode($data);
    } 
    else 
    {
        $data = $abc->tampil_semua_data_sepeda();
        echo json_encode($data);
    }

    unset($postdata, $data, $id_sepeda, $abc);
}
