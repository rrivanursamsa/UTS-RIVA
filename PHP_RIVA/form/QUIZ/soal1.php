<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
</head>
<body>
    <center>
        <!-- from -->
<form method="post" action="">
    <h3>Masukkan berat badan anda (kg)</h3>
    <input type="number" name="berat_badan" required>

    <h3>Masukkan tinggi badan anda (cm):</h3>
    <input type="number" name="tinggi_badan" required>

    <br>
    <br>

    <input type="submit" value="Hitung BMI">
</form>
    </center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat_badan = $_POST["berat_badan"];
    $tinggi_badan = $_POST["tinggi_badan"];

    // Konversi tinggi badan ke meter
    $tinggi_badan_meter = $tinggi_badan / 100;

    // Hitung BMI
    $bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);

    // Tentukan kategori berdasarkan BMI
    if ($bmi < 18.5) {
        $kategori = "kurus";
    } elseif ($bmi < 25) {
        $kategori = "idelal";
    } else {
        $kategori = "obesitas";
    }

    echo "<p>Berat badan anda : $berat_badan <p>";
    echo "<p>Tinggi badan anda : $tinggi_badan <p>";
    echo "Nilai BMI anda adalah: " . number_format($bmi, 4) ;
    echo "<p>Anda termasuk berbadan $kategori <p>";
}
?>

</body>
</html>