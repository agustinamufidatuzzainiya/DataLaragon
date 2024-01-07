<?php
$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
];

$array1 = array_reverse($kode);
$array2 = array_flip($kode);
shuffle($kode);

print_r($array1); echo "<br><br>";
print_r($array2); echo "<br><br>";
print_r($kode);
?>