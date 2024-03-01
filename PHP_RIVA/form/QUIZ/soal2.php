<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program bubur ayam</title>
</head>
<body>
    <center>
        <!-- from-->
<form method="post" action="">
    <h5>Apakah Anda menyukai bubur ayam? (ya/tidak)</h5></p>
    <input type="text" name="jawaban_bubur_ayam" required>

    <br>

    <h5>Jika ya, apakah Anda suka bubur ayam yang diaduk? (ya/tidak)</h5>
    <input type="text" name="jawaban_diaduk" required>

    <br>
    <br>

    <input type="submit" value="cobaa">
</form>
    </center>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jawaban_bubur_ayam = $_POST["jawaban_bubur_ayam"];

    if ($jawaban_bubur_ayam == "ya") {
        $jawaban_diaduk = $_POST["jawaban_diaduk"];

        if ($jawaban_diaduk == "ya") {
            echo "Beuh, kalau diaduk buburnya jadi mirip ??!";
        } elseif ($jawaban_diaduk == "tidak") {
            echo "Anda ternyata manusia beradab";
        } else {
            echo "Jawaban tidak valid. Silakan pilih 'ya' atau 'tidak' untuk pertanyaan kedua.";
        }
    } elseif ($jawaban_bubur_ayam == "tidak") {
        echo "Cobain lagi deh kapan-kapan, sehat dan bergizi, siapa tahu jadi suka";
    } else {
        echo "Jawaban tidak valid. Silakan pilih 'ya' atau 'tidak' untuk pertanyaan pertama.";
    }
}
?>
        