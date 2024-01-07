<!-- sebelum dimodifikasi (a) -->
<!-- <?php
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'r');
    $theData = fgets($fh);
    fclose($fh);
    echo $theData;
?> -->

<!-- setelah dimodifikasi (b) -->
<?php
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'r');
    while (! feof ($fh))
    {
        echo fgets($fh),"<br>";
    }
    fclose($fh);
?>