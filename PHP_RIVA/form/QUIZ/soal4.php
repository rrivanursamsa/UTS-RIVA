<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sapaan menentukan jenis kelamin</title>
</head>
<body>
<center>
    <!-- from -->
<form method="post" action="">
    <p>Masukkan nama anda:</p>
    <input type="text" name="nama" required>

    <p>Anda pria/wanita?:</p>
    <select name="jenis_kelamin" required>
        <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
    </select>

    <br>
    <br>

    <input type="submit" value="sapaan">
</form>
</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    if ($jenis_kelamin == "pria") {
        $sapaan = "Halo bro";
    } elseif ($jenis_kelamin == "wanita") {
        $sapaan = "Halo sis";
    } else {
        $sapaan = "Halo";
    }

    echo "<p>$sapaan $nama</p>";
}
?>

</body>
</html>