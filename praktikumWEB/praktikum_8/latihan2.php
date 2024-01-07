<?php
    $string = 'Program Studi.Teknik.Informatika.UIN Maliki Malang';
    $array = explode ('.', $string);
    foreach($array as $value){
        echo $value."<br>";
    }    
?>