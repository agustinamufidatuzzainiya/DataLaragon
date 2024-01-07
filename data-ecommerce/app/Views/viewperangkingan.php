<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Tabel Data Perangkingan</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Aplikasi</th>
                            <th>Y</th>
                            <th>Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataMb as $row) : ?>
                            <tr>
                                <td><?= $row['nama_aplikasi']; ?></td>
                                <td><?= $row['Y']; ?></td>
                                <td><?= $row['ranking']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>