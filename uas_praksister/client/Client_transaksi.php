<?php
error_reporting(1);
class ClientTransaksi
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

    public function tampil_semua_data_transaksi()
    {
        $client = curl_init($this->url . "server_transaksi.php");
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($data, $client, $response);
    }

    public function tampil_data_transaksi($id_transaksi)
    {
        $id_transaksi = $this->filter($id_transaksi);
        $client = curl_init($this->url . "server_transaksi?aksi=tampil-transaksi&id_transaksi=" . $id_transaksi);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_transaksi, $client, $response, $data);
    }

    public function tambah_data_transaksi($data)
    {
        // date_default_timezone_set('Asia/Jakarta');
        // $date = date('Y-m-d H:i:s');
        $data = '{
            "id_transaksi":"' . $data['id_transaksi'] . '",
            "id_sepeda":"' . $data['id_sepeda'] . '",
            "id_pemasok":"' . $data['id_pemasok'] . '",
            "tanggal_transaksi":"' . $data['tanggal_transaksi'] . '",
            "jumlah_barang":"' . $data['jumlah_barang'] . '",
            "total_harga":"' . $data['total_harga'] . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "server_transaksi.php");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_data_transaksi($data)
    {
        // date_default_timezone_set('Asia/Jakarta');
        // $date = date('Y-m-d H:i:s');
        $data = '{
            "id_transaksi":"' . $data['id_transaksi'] . '",
            "id_sepeda":"' . $data['id_sepeda'] . '",
            "id_pemasok":"' . $data['id_pemasok'] . '",
            "tanggal_transaksi":"' . $data['tanggal_transaksi'] . '",
            "jumlah_barang":"' . $data['jumlah_barang'] . '",
            "total_harga":"' . $data['total_harga'] . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "server_transaksi.php");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_data_transaksi($data)
    {
        $id_transaksi = $this->filter($data['id_transaksi']);
        $data = '{  "id_transaksi":"' . $id_transaksi . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url . "server_transaksi.php");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_transaksi, $data, $c, $response);
    }

    public function __destruct()
    {
        unset($this->url);
    }
}

$url = 'http://127.0.56.1:8000/server/';
$abc = new ClientTransaksi($url);
?>