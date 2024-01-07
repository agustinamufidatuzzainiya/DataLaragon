<!-- resources/views/muslimah
    /edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🧕🏻Edit Muslimah🧕🏻</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="img/muslimah.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/muslimah.png" type="image/x-icon">
</head>

<body>
    <main class="container">
        <h1 class="mt-5">Edit Produk "Modest Haven"</h1>

        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>
                        <form method="post" action="{{ url("/muslimah/{$muslimah->id}") }}">
                            @csrf
                            @method('put')

                            <div class="mb-3 row">
                                <label for="merk" class="col-sm-2 col-form-label">Merk:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="merk" value="{{ $muslimah->merk }}"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="gambar"
                                        value="{{ $muslimah->gambar }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="jenis" class="col-sm-2 col-form-label">Jenis:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis" value="{{ $muslimah->jenis }}"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="detail" class="col-sm-2 col-form-label">Detail:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="detail"
                                        required>{{ $muslimah->detail }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="harga" class="col-sm-2 col-form-label">Harga:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga" value="{{ $muslimah->harga }}"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>