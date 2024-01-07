<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="img/western.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/western.png" type="image/x-icon">
    <title>🤠Edit Urban Elegance🤠</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body class="bg-light">
    <main class="container mt-5">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Edit Urban Elegance</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url("/western/{$western->id}") }}">
                    @csrf
                    @method('put')

                    <div class="mb-3 row">
                        <label for="merk" class="col-sm-2 col-form-label">Merk:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="merk" value="{{ $western->merk }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gambar" value="{{ $western->gambar }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jenis" class="col-sm-2 col-form-label">Jenis:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis" value="{{ $western->jenis }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="detail" class="col-sm-2 col-form-label">Detail:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="detail" required>{{ $western->detail }}</textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" value="{{ $western ->harga }}" required>
                </div>
            </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>
