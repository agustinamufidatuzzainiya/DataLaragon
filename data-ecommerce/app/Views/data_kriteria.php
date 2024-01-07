<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Tabel Data Kriteria</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Nilai Bobot</th>
                            <th>Nama Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($dataKriteria as $row):
                            $no++; ?>
                            <tr>
                                <td>
                                    <?= $no; ?>
                                </td>
                                <td>
                                    <?= $row->kode_kriteria; ?>
                                </td>
                                <td>
                                    <?= $row->nama_kriteria; ?>
                                </td>
                                <td>
                                    <?= $row->nilai_kriteria; ?>
                                </td>
                                <td>
                                    <?= $row->tipe_kriteria; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </di