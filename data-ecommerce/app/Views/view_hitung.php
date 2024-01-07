<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">SPK Dompet Digital</h1>
            <div class="table-responsive">
                <div class="row">
                    <div class="col-12">

                        <!-- Hitung NORMALISASI -->
                        <div class="card-body">
                            <p>[Note: B = Benefit
                                C = Cost]</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>C1 - Kerjasama Merchant [B] | max</th>
                                        <th>C2 - Promo dan Penawaran Menarik [B] | max</th>
                                        <th>C3 - Layanan Customer Service [C] | min</th>
                                        <th>C4 - Kemudahan Aplikasi [B] | max</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 0;
                                    foreach ($dataMb as $row) :
                                        $no++;

                                    ?>
                                        <tr>
                                            <th> Nilai Max/Min Kriteria</th>

                                            <td><?= $row->maxminK1 ?></td>
                                            <td><?= $row->maxminK2 ?></td>
                                            <td><?= $row->maxminK3 ?></td>
                                            <td><?= $row->maxminK4 ?></td>


                                        </tr>

                                    <?php
                                    endforeach;
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>