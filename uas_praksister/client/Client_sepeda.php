<?php
error_reporting(1);
class ClientSepeda
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
        unset($url);
    }

    public function filter($data)
    {
        $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
        return $data;
        unset($data);
    }


    //////////////>>>>> CLIENT DATA SEPEDA <<<<<///////////////
    public function tampil_semua_data_sepeda()
    {
        $client = curl_init($this->url . "server_sepeda.php");
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($data, $client, $response);
    }

    public function tampil_data_sepeda($id_sepeda)
    {
        $id_sepeda = $this->filter($id_sepeda);
        $client = curl_init($this->url . "server_sepeda.php?aksi=tampil-sepeda&id_sepeda=" . $id_sepeda);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_sepeda, $client, $response, $data);
    }

    public function tambah_data_sepeda($data)
    {
        $data = '{
            "id_sepeda":"' . $data['id_sepeda'] . '",
            "id_pemasok":"' . $data['id_pemasok'] . '",
            "nama":"' . $data['nama'] . '",
            "gambar_sepeda":"' . $data['gambar_sepeda'] . '",
            "ukuran":"' . $data['ukuran'] . '",
            "jenis":"' . $data['jenis'] . '",
            "warna":"' . $data['warna'] . '",
            "stok":"' . $data['stok'] . '",
            "harga":"' . $data['harga'] . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "server_sepeda.php");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_data_sepeda($data)
    {
        $data = '{
            "id_sepeda":"' . $data['id_sepeda'] . '",
            "id_pemasok":"' . $data['id_pemasok'] . '",
            "nama":"' . $data['nama'] . '",
            "gambar_sepeda":"' . $data['gambar_sepeda'] . '",
            "ukuran":"' . $data['ukuran'] . '",
            "jenis":"' . $data['jenis'] . '",
            "warna":"' . $data['warna'] . '",
            "stok":"' . $data['stok'] . '",
            "harga":"' . $data['harga'] . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "server_sepeda.php");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_data_sepeda($data)
    {
        $id_sepeda = $this->filter($data['id_sepeda']);
        $data = '{  "id_sepeda":"' . $id_sepeda . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "server_sepeda.php");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_sepeda, $data, $c, $response);
    }

    public function __destruct()
    {
        unset($this->url);
    }
}

$url = 'http://127.0.56.1:8000/server/';
$abc = new ClientSepeda($url);
?>