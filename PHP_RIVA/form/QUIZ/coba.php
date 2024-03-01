<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <center>
        <h2>Program bubur ayam</h2>
        <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td><h5>Apakah Anda menyukai bubur ayam? (ya/tidak)</h5></td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <br>
                <tr>
                    <td>Jika ya, apakah Anda suka bubur ayam yang diaduk? (ya/tidak)</td>
                    <td>:</td>
                    <td><select name="bubur ayam" id= "bubur ayam">
                      <option value="bubur ayam">-- pilih --</option>
                      <option value="YA">YA</option>
                      <option value="TIDAK">TIDAK</option>
                    </select></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name ="simpan" value='coba'></td>
                </tr>
            </table>
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