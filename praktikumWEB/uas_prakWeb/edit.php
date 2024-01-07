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


// Memeriksa apakah form pencarian telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan ID barang dari form pencarian
    $id_barang = $_POST["id_barang"];

    // Melakukan pencarian data barang berdasarkan ID
    $sql = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
    $result = $conn->query($sql);

    // Memeriksa apakah data barang ditemukan
    if ($result->num_rows > 0) {
        // Menampilkan form edit barang
        $row = $result->fetch_assoc();
        $id_barang = $row["id_barang"];
        $nama_barang = $row["nama_barang"];
        $harga_barang = $row["harga"];
    } else {
        // Jika barang tidak ditemukan
        echo "Tidak menemukan barang.";
    }
}

// Memeriksa apakah form edit telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_barang"])) {
    // Mendapatkan data dari form edit barang
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $harga_barang = $_POST["harga_barang"];

    // Melakukan update data barang
    $sql = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga_barang' WHERE id_barang = '$id_barang'";
    if ($conn->query($sql) === TRUE) {
        echo "Data barang berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h2>Edit Barang</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id_barang">ID Barang:</label>
        <input type="text" id="id_barang" name="id_barang" required>
        <br><br>
        <input type="submit" value="Cari">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $result->num_rows > 0) { ?>
        <h3>Edit Data Barang:</h3>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $nama_barang; ?>" required>
            <br><br>
            <label for="harga_barang">Harga Barang:</label>
            <input type="text" id="harga_barang" name="harga_barang" value="<?php echo $harga_barang; ?>" required>
            <br><br>
            <input type="submit" name="edit_barang" value="Update">
        </form>
    <?php } ?>
</body>
</html>