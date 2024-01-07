<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Tabel Data Bobot</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Nilai Kriteria</th>
                            <th>Tipe Kriteria</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($dataBobot as $row) :
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
                                    <?= $row->nama_bobot; ?>
                                </td>
                                <td>
                                    <?= $row->nilai_bobot; ?>
                                </td>
                                <!-- <td>
                                    <button class="btn btn-danger btn-sm" type="submit" id="hapus">Hapus</button>
                                    <button class="btn btn-warning btn-sm" type="submit" id="edit">Edit</button>
                                </td> -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </di