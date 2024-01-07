<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Tabel Data Detail</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Alternatif</th>
                            <th>Nama Aplikasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($dataDetail as $row) :
                            $no++; ?>
                            <tr>
                                <td>
                                    <?= $no; ?>
                                </td>
                                <td>
                                    <?= $row->nama_alternatif; ?>
                                </td>
                                <td>
                                    <?= $row->nama_aplikasi; ?>
                                </td>
                                <td>
                                    <!-- Tombol Hapus -->
                                    <form action="<?= site_url('Home/deleteDetail/'.$row->id_detail) ?>" method="post"
                                        style="display:inline;">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus detail ini?')">Hapus</button>
                                    </form>

                                    <!-- Tombol Edit -->
                                    <a href="<?= site_url('Home/showEditForm/'.$row->id_detail) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </di