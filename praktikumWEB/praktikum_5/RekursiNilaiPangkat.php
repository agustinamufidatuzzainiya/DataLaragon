<?php
    function pangkat($x, $y){
        if($y == 1){
        return $x;
    }
    else{
        return $x * pangkat($x, $y-1);
    }
}
    if (!empty($_POST['number1']) || !empty($_POST['number2'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
    }
    else{
        $number1 = null;
        $number2 = null;
    }
    echo "<form method='POST'> Angka Yang Dipangkatkan = <input type='number' 
            name='number1' value='$number1' />
            <br> Jumlah Yang Dipangkatkan = <input type='number'
            name='number2' value='$number2' /> <br><input type='submit'>
            </form>";
        if($number1 != null || $number2 != null){
            echo "Hasil $number1 pangkat $number2 = ", pangkat($number1,$number2);
    }
    else{  
        echo "Hasil Angka Belum diinputkan. . .";
    }
?>