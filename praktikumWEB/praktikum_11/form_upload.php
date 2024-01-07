<form method="post" action="act_upload.php" enctype="multipart/form-data">
 <table>
    <tr>
        <td>File</td>
        <td><input type="file" name="berkas" accept="*" required></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tgl" required></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td><textarea name="deskripsi" cols="30" rows="2" required></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
    <a href='home.php'>Back</a> 
 </table>
 </form>
