<h3>REGISTER</h3>
<form action="aksi_register.php" method="POSt">
    <table>
        <tr>
            <td> Username:</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>Ulangi Password:</td>
            <td><input type="password" name="psw2" required></td>
        </tr>
        <tr>
            <td>Nama Lengkap:</td>
            <td><input type="text" name="namalengkap" required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td>Level:</td>
            <td>
                <select name="level">
                    <option value="Admin">Admin</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Dosen">Dosen</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Register">
    <input type="reset" value="Reset">
</form>
