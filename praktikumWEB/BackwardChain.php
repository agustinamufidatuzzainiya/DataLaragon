<?php
// Definisikan fakta-fakta yang diketahui
$fakta = array(
    'penyakit' => array('Cendawan', 'Virus', 'Serangga'),
    'gejala' => array(
        'Cendawan' => array('Bercak daun', 'Daun menguning', 'Perkecil buah'),
        'Virus' => array('Kerdil', 'Bintik-bintik kuning'),
        'Serangga' => array('Daun digerogoti', 'Buah rusak')
    ),
    'solusi' => array(
        'Cendawan' => 'Pestisida',
        'Virus' => 'Pemangkasan',
        'Serangga' => 'Insektisida'
    )
);

$solusi = '';

// Cek apakah form telah disubmit
if (isset($_POST['analisisBtn'])) {
    $gejala = $_POST['gejala'];
    $penyakit = '';

    // Temukan penyakit yang cocok dengan gejala
    foreach ($fakta['penyakit'] as $p) {
        if (in_array($gejala, $fakta['gejala'][$p])) {
            $penyakit = $p;
            break;
        }
    }

    // Jika ditemukan penyakit yang cocok, tampilkan solusi
    if ($penyakit != '') {
        $solusi = 'Solusi yang direkomendasikan: ' . $fakta['solusi'][$penyakit];
    } else {
        $solusi = 'Tidak ada solusi yang cocok';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pakar Analisa Penyakit Tanaman Cabai Merah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        #container {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        select {
            width: 100%;
            padding: 5px;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
        }

        #solusi {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Sistem Pakar Analisa Penyakit Tanaman Cabai Merah</h1>
    <div id="container">
        <form method="post">
            <label for="gejala">Pilih Gejala:</label>
            <select id="gejala" name="gejala">
                <option value="Bercak daun">Bercak daun</option>
                <option value="Daun menguning">Daun menguning</option>
                <option value="Perkecil buah">Perkecil buah</option>
                <option value="Kerdil">Kerdil</option>
                <option value="Bintik-bintik kuning">Bintik-bintik kuning</option>
                <option value="Daun digerogoti">Daun digerogoti</option>
                <option value="Buah rusak">Buah rusak</option>
            </select>
            <button type="submit" name="analisisBtn">Analisis</button>
        </form>
        <div id="solusi"><?php echo $solusi; ?></div>
    </div>
</body>
</html>
