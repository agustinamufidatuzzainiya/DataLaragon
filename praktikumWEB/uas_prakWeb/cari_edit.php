<!DOCTYPE html>
<html>
<head>
    <title>Cari Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            width: 300px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .search-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
        }

        .search-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        .edit-form {
            margin-top: 20px;
        }

        .edit-form label {
            display: block;
            margin-bottom: 5px;
        }

        .edit-form input[type="text"],
        .edit-form textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .edit-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
        }

        .edit-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cari Barang</h1>

        <form class="search-form" method="GET" action="pencarian.php">
            <input type="text" name="keyword" placeholder="Cari barang...">
            <input type="submit" value="Cari">
        </form>

        <table>
            <tr>
                <th>ID_Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Sepatu</td>
                <td>Rp 100.000</td>
                <td><a href="edit.php?id=1">Edit</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacket</td>
                <td>Rp 150.000</td>
                <td><a href="edit.php?id=2">Edit</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Sandal</td>
                <td>Rp 50.000</td>
                <td><a href="edit.php?id=1">Edit</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Jilbab</td>
                <td>Rp 60.000</td>
                <td><a href="edit.php?id=2">Edit</a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>baju</td>
                <td>Rp 40.000</td>
                <td><a href="edit.php?id=1">Edit</a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>kaos kaki</td>
                <td>Rp 10.000</td>
                <td><a href="edit.php?id=2">Edit</a></td>
            </tr>
            <tr>
                <td>7</td>
                <td>kue</td>
                <td>Rp 5.000</td>
                <td><a href="edit.php?id=1">Edit</a></td>
            </tr>
            <tr>
                <td>8</td>
                <td>roti</td>
                <td>Rp 8.000</td>
                <td><a href="edit.php?id=2">Edit</a></td>
            </tr>
            <tr>
                <td>9</td>
                <td>tas</td>
                <td>Rp 30.000</td>
                <td><a href="edit.php?id=1">Edit</a></td>
            </tr>
            <tr>
                <td>10</td>
                <td>mukena</td>
                <td>Rp 120.000</td>
                <td><a href="edit.php?id=2">Edit</a></td>
            </tr>
        </table>

        <h1>Edit Barang</h1>

        <form class="edit-form" method="POST" action="edit_process.php">
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" name="nama_barang" id="nama_barang" value="Barang 1">
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga:</label>
                <input type="text" name="harga_barang" id="harga_barang" value="Rp 100.000">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</body>
</html>
