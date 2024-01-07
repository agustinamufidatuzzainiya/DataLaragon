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
    $id_transaksi = $data->id_transaksi;
    $id_sepeda = $data->id_sepeda;
    $id_pemasok = $data->id_pemasok;
    $tanggal_transaksi = date('Y-m-d H:i:s', strtotime($data->$tanggal_transaksi));
    $jumlah_barang = $data->jumlah_barang;
    $total_harga = $data->total_harga;
    $aksi = $data->aksi;

    if ($aksi == 'tambah-transaksi')
    {
        $data2 = array(
            'id_transaksi' => $id_transaksi,
            'id_sepeda' => $id_sepeda,
            'id_pemasok' => $id_pemasok,
            'tanggal_transaksi' => $tanggal_transaksi,
            'jumlah_barang' => $jumlah_barang,
            'total_harga' => $total_harga
        );
        $abc->tambah_data_transaksi($data2);
    } 
    
    elseif ($aksi == 'ubah-transaksi') 
    {
        $data2 = array(
            'id_transaksi' => $id_transaksi,
            'id_sepeda' => $id_sepeda,
            'id_pemasok' => $id_pemasok,
            'tanggal_transaksi' => $tanggal_transaksi,
            'jumlah_barang' => $jumlah_barang,
            'total_harga' => $total_harga
        );
        $abc->ubah_data_transaksi($data2);
    } 
    
    elseif ($aksi == 'hapus-transaksi') 
    {
        $abc->hapus_data_transaksi($id_transaksi);
    }
    
    unset($postdata, $data, $data2, $id_transaksi, $id_sepeda, $id_pemasok, $tanggal_transaksi, $jumlah_barang, $aksi, $abc);
}

elseif ($_SERVER['REQUEST_METHOD'] == 'GET') 
{
    if (($_GET['aksi'] == 'tampil-transaksi') and (isset($_GET['id_transaksi']))) 
    {
        $id_transaksi = filter($_GET['id_transaksi']);
        $data = $abc->tampil_data_transaksi($id_transaksi);
        echo json_encode($data);
    } 
    
    else 
    {        
        $data = $abc->tampil_semua_data_transaksi();
        echo json_encode($data);
    }
   
    unset($postdata, $data, $id_transaksi, $abc);
}
