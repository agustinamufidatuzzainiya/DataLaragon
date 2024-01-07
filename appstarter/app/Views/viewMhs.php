<style>
table, th, td {
    border: 1px solid black;
}
</style>
<center>
    <h3>Daftar Mahasiswa</h3>
    <table style = "width:60%">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach($dataMhs as $row):$no++;?>
        <tr>
            <th> <?= $no; ?></th>
            <td> <?= $row->nim; ?></td>
            <td> <?= $row->nama; ?></td>
            <td> <?= $row->jurusan; ?></td>
            <td> <?= $row->alamat; ?></td>
            <td>
                <a href="/home/formeditmhs/<?=$row->id_mhs;?>">Edit</a>
                <a href="/home/deletemhs/<?= $row->id_mhs; ?>">Hapus</a>
            </td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</center>