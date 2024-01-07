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
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-success mb-3">Tambah <?php echo $title ?></button>
                            </div>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama Usaha</th>
                                <th>Nama Pimpinan</th>
                                <th>Jalan</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Jenis Usaha</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($dataUMKM as $row) : $no++ ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row->nama_usaha; ?></td>
                                        <td><?= $row->nama_pimpinan; ?></td>
                                        <td><?= $row->jalan; ?></td>
                                        <td><?= $row->desa; ?></td>
                                        <td><?= $row->kecamatan; ?></td>
                                        <td><?= $row->jenis_usaha; ?></td>
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