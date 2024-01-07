<?php
    function fibonacci($n) {
        if($n <= 0 || $n <= 1){
        return $n;
    }
        else{
        return fibonacci($n-2) + Fibonacci
        ($n-1) ;
    }
}
    if (!empty($_POST['fibonacci'])){
    $number = $_POST['fibonacci'];
}
else{
    $number = null;
}
    echo "<form method='POST'> Deret Fibonacci ke = <input type='number'
    name='fibonacci' value='$number' />
    </form>";
    if($number != null){
        echo "Hasil deret Fibonacci ke-$number = ", fibonacci($number);
    }
    else{
        echo "Hasil deret fibonacci belum ditemukan. . .";
    }
?>