<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gils Page 💆🏻‍♀️💅🏻</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
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
            <h1 class="mt-5">Bodycare Product 🦋😊</h1>

        <!-- START DATA -->
                <!-- Formulir untuk menambah Bodycare -->
                <form method="post" action="{{ url('/bodycare/create') }}">
                    @csrf
                
                    </div>
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
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
        <div class="my-3 p-3 bg-body rounded shadow-sm">

            <table class="table table-striped">
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
                    @foreach($bodycares as $bodycare)
                        <tr>
                            <td>{{ $count }}</td> <!-- Menampilkan nomor urut -->
                            <td>{{ $bodycare->id }}</td>
                            <td>{{ $bodycare->merk }}</td>
                            <td><img src="{{ $bodycare->gambar }}" alt="Gambar Bodycare" style="max-width: 100px;"></td>
                            <td>{{ $bodycare->jenis }}</td>
                            <td>{{ $bodycare->harga }}</td>
                            <td>{{ $bodycare->detail }}</td>
                            <td>
                                <a href='{{ url("/bodycare/{$bodycare->id}/edit") }}' class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ url("/bodycare/{$bodycare->id}") }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Del</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
