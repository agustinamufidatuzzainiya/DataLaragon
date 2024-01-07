<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Mahasiswa</h2>
        <form method="POST" action="<?php echo site_url('home/simpanmhs') ?>">
            <label for="nim_mhs">NIM:</label>
            <input type="text" name="nim_mhs" id="nim_mhs" placeholder="NIM" required>
            
            <label for="nama_mhs">Nama:</label>
            <input type="text" name="nama_mhs" id="nama_mhs" placeholder="Nama" required>
            
            <label for="jurusan_mhs">Jurusan:</label>
            <select name="jurusan_mhs" id="jurusan_mhs">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
            </select>
            
            <label for="alamat_mhs">Alamat:</label>
            <input type="text" name="alamat_mhs" id="alamat_mhs" placeholder="Alamat" required>
            
            <br><br>
            <button type="submit">Simpan Data</button>
            <a href="<?php echo site_url('home/viewmhs') ?>">Lihat Data</a>
        </form>
    </div>
</body>
</html>
