<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nama <?php echo $title ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-success mb-3">Tambah <?php echo $title ?></button>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Nilai Kriteria</th>
                                <th>Tipe Kriteria</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($dataBobot as $row) : $no++ ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row->kode_kriteria; ?></td>
                                        <td><?= $row->nama_kriteria; ?></td>
                                        <td><?= $row->nilai_kriteria; ?></td>
                                        <td><?= $row->tipe_kriteria; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning mb-3">Edit</button>
                                            <button type="button" class="btn btn-danger mb-3">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->