<!DOCTYPE html>
<html lang="en">
<head>
    <title>From biodata diri</title>
</head>
<body>
    <center>
        <h2>Nilai ujian Nasional</h2>
        <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><input type='number' id='nisn' name='NISN' min='10' max='100000000000000000000'></td>
                </tr>
                <tr>
                    <td>Jenis_kelamin</td>
                    <td>:</td>
                    <td><input type='radio' id= 'perempuan' name='jk' value='perempuan'>
                    <label for='perempuan'>perempuan</label></td>
                    <td><input type='radio' id='laki-laki' name='jk' value='laki-laki'>
                    <label for='laki-laki'>laki-laki</label></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id= "jurusan">
                      <option value="jurusan">-- pilih jurusan --</option>
                      <option value="RPL">RPL</option>
                      <option value="TKR">TKR</option>
                      <option value="TSM">TSM</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type='text' name='kelas'></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name='alamat' row='2' cols='21'></textarea></td>
                </tr>
                <tr>
                    <td>telepon</td>
                    <td>:</td>
                    <td><input type='text' name='telepon'></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>:</td>
                    <td><input type='text' name='email'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name ="simpan" value='PROSES'></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['NISN'];
    $c = $_POST['jk'];
    $d = $_POST['jurusan'];
    $e = $_POST['kelas'];
    $f = $_POST['alamat'];
    $g = $_POST['telepon'];
    $h = $_POST['email'];

    echo "Nama : $a <br>";
    echo "NISN : $b <br>";
    echo "jk : $c <br>";
    echo "jurusan : $d <br>";
    echo "kelas : $e <br>";
    echo "alamat: $f <br>";
    echo "telepon : $g <br>";
    echo "email : $h <br>";

}
?>