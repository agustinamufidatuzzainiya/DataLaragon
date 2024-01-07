<?php
$kode = [
    'Afghanistan'   => 93,
    'Brazil'        => 55,
    'Indonesia'     => 62,
    'Malaysia'      => 60,
    'Palestina'     => 970 ];
asort($kode);
print_r($kode);
echo "<br><br>";

arsort($kode);
print_r($kode);
echo "<br><br>";

ksort($kode);
print_r($kode);
echo "<br><br>";

krsort($kode);
print_r($kode);
?>