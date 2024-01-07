<?php
function cari($array, $cari):bool {
    $status = false;
    foreach($array as $a){
    if($cari == $a){
    $status = true;
    }
}
    return $status;
}

$arr = [12, 43, 65, 87, 2 , 98, 51, 76, 33, 21];
echo 'Cari 57 pada $arr<br>';
if(cari($arr, 57)){
    echo "TRUE";
} else {
    echo "FALSE";
}
?>