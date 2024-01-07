<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "tokoku";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<body>
    <h2>Pencarian Barang</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id_barang">ID Barang:</label>
        <input type="text" id="id_barang" name="id_barang" required>
        <br><br>
        <input type="submit" value="Cari">
    </form>

<?php
// Memeriksa apakah form pencarian telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan ID barang dari form pencarian
    $id_barang = $_POST["id_barang"];

    // Melakukan pencarian data barang berdasarkan ID
    $sql = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
    $result = $conn->query($sql);

    // Memeriksa apakah data barang ditemukan
    if ($result->num_rows > 0) {
        // Menampilkan data barang dalam tabel
        echo "<table>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_barang"] . "</td>";
            echo "<td>" . $row["nama_barang"] . "</td>";
            echo "<td>" . $row["harga"] . "</td>";
            echo "<td><a href='edit.php'>Edit</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        // Jika barang tidak ditemukan
        echo "Tidak menemukan barang.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Barang</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
        }
    </style>
</head>

</body>
</html>