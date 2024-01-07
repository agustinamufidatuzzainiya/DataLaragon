<!-- Add this content to your form_kriteria.php view file -->
<div class="col-md-12">
    <div class="card-body">
        <h1 class="card-title" style="color:green">Form Alternatif</h1>

        <!-- Display validation errors if any -->
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <!-- Form to add Kriteria -->
        <form method="post" action="<?= base_url('home/insertAlternatif') ?>">
            <div class="form-group">
                <label for="nama_aplikasi">Nama Aplikasi</label>
                <input type="text" class="form-control" name="nama_aplikasi" value="<?= set_value('nama_aplikasi') ?>">
            </div>
            <div class="form-group">
                <label for="C1">C1</label>
                <input type="text" class="form-control" name="C1" value="<?= set_value('C1') ?>">
            </div>
            <div class="form-group">
                <label for="C2">C2</label>
                <input type="text" class="form-control" name="C2" value="<?= set_value('C2') ?>">
            </div>
            <div class="form-group">
                <label for="C3">C3</label>
                <input type="text" class="form-control" name="C3" value="<?= set_value('C3') ?>">
            </div>
            <div class="form-group">
                <label for="C4">C4</label>
                <input type="text" class="form-control" name="C4" value="<?= set_value('C4') ?>">
            </div>
            <button type="submit" class="btn btn-primary">Add Alternatif</button>
        </form>
    </div>
</div>