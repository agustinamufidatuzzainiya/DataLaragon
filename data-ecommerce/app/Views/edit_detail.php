<!-- File: views/edit_kriteria.php -->

<div class="col-md-12">
    <div class="card-body">
        <h1 class="card-title" style="color:green">Edit Detail</h1>

        <!-- Display validation errors if any -->
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <!-- Form to edit Kriteria -->
        <form method="post" action="<?= base_url('home/editDetail/' . $detail->id_detail) ?>">
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif</label>
                <input type="text" class="form-control" name="nama_alternatif"
                    value="<?= set_value('nama_alternatif', $detail->nama_alternatif) ?>" readonly>
            </div>

            <div class="form-group">
                <label for="nama_aplikasi">Nama Aplikasi</label>
                <input type="text" class="form-control" name="nama_aplikasi"
                    value="<?= set_value('nama_aplikasi', $detail->nama_aplikasi) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Detail</button>
        </form>
    </div>
</div>