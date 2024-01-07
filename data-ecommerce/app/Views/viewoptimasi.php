<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Tabel Data Optimasi</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Aplikasi</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataMb as $row) : ?>
                            <tr>
                                <td><?= $row['nama_aplikasi']; ?></td>
                                <td><?= $row['C1']; ?></td>
                                <td><?= $row['C2']; ?></td>
                                <td><?= $row['C3']; ?></td>
                                <td><?= $row['C4']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </di