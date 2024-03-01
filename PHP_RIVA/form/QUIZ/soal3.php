<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penentuan generasi</title>
</head>
<body>
<center>
    <h3>penentuan ganerasi</h3>
    <!-- from-->
<form method="post" action="">
    <p>Masukkan nama anda:</p>
    <input type="text" name="nama" required>

    <p>Tahun berapa anda lahir?</p>
    <input type="number" name="tahun_lahir" required>

    <br>
    <br>
    <input type="submit" value="Tentukan Generasi">
</form>

</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tahun_lahir = $_POST["tahun_lahir"];

    // Tentukan generasi berdasarkan tahun kelahiran
    if ($tahun_lahir >= 1944 && $tahun_lahir <= 1964) {
        $generasi = "Baby boomer";
    } elseif ($tahun_lahir >= 1965 && $tahun_lahir <= 1979) {
        $generasi = "Generasi X";
    } elseif ($tahun_lahir >= 1980 && $tahun_lahir <= 1994) {
        $generasi = "Generasi Y (Millennials)";
    } elseif ($tahun_lahir >= 1995 && $tahun_lahir <= 2015) {
        $generasi = "Generasi Z";
    } else {
        $generasi = "Tidak dapat menentukan generasi";
    }

    echo "<p>$nama, berdasarkan tahun lahir anda tergolong $generasi</p>";
}
?>
</body>
</html>