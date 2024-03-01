<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek pembagian 3</title>
</head>
<body>
<center>
    <!-- from -->
<form method="post" action="">
    <h3>masukan sebuah bilangan</h3>
    <input type="number" name="bilangan" required>

    <br>
    <br>

    <input type="submit" value="cek pembagian 3">
</form>
    </center>

 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $bilangan = $_POST ["bilangan"];

    if ($bilangan % 3 == 0) {
        echo "<p>$bilangan habis dibagi 3</p>";
    }else {
        echo "<p>$bilangan tidak habis dibagi 3</P>";
    }
}
 ?>
</body>
</html>


