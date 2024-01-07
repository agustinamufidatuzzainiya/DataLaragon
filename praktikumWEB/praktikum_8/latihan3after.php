<?php
$numberedString = "1234567890123456789012345678901234567890";
    $arr = str_split($numberedString);
    $arrLength = count($arr);
    $inow = 0;
    for($i = 0; $i < $arrLength; $i++){
    if($arr[$i] == 5){
        echo "The position of 5 in our string was $i<br>";
        $inow = $i + 1;
    break;
    }
}
    for($j = $inow; $j < $arrLength; $j++){
    if($arr[$j] == 5){
        echo "The position of the second 5 was $j";
    return ;
    }
} ?>