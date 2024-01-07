<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="img/muslimah.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/muslimah.png" type="image/x-icon">

    <title>🧕🏻Muslimah🧕🏻</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body class="bg-light">
    <main class="container">
        <h1 class="mt-5">Muslimah "Modest Haven" Product</h1>

        <!-- START DATA -->
        <!-- Formulir untuk menambah muslimah -->
        <div class="container py-5">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Add New Modest Haven Product</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/muslimah/create') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="merk" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gambar" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jenis" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="detail" class="col-sm-2 col-form-label">Detail</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="detail" required></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="harga" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-3">Merk</th>
                        <th class="col-md-2">Gambar</th>
                        <th class="col-md-2">Jenis</th>
                        <th class="col-md-2">Harga</th>
                        <th class="col-md-2">Detail</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1; // Inisialisasi variabel hitung
                    @endphp
                    @foreach($muslimah as $muslimah)
                    <tr>
                        <td>{{ $count }}</td> <!-- Menampilkan nomor urut -->
                        <td>{{ $muslimah->id }}</td>
                        <td>{{ $muslimah->merk }}</td>
                        <td><img src="{{ $muslimah->gambar }}" alt="Gambar Muslimah" style="max-width: 100px;"></td>
                        <td>{{ $muslimah->jenis }}</td>
                        <td>{{ $muslimah->harga }}</td>
                        <td>{{ $muslimah->detail }}</td>
                        <td>
                            <a href='{{ url("/muslimah/{$muslimah->id}/edit") }}' class="btn btn-warning btn-sm"
                                style="margin-right: 5px;">Edit</a>
                                <form action="{{ url("/muslimah/{$muslimah->id}") }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" style="margin-left: 5px;"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php
                    $count++; // Tingkatkan nilai hitung setiap iterasi
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>