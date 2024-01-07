<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Demo koneksi database MySQL</h1> <?
        $host = "localhost";//untuk host
        $username = "root";//untuk username
        $password = ""; //untuk password
        $database - "db_akademik";//untuk nama database 12 
        $koneksi - mysqli_connect($host, $username, $password, $database);
    if ($koneksi) {
        echo "OK";  
    } else {
        echo "Server not connected";}
    ?>
</body>
</html>
