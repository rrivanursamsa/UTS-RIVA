<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Latihan</title>
  </head>
  <body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
           <a class="navbar-brand" href="Latihan.php">Biodata</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav">
                <a class="nav-link" href="persegi.php">Persegi</a>
                <a class="nav-link" href="persegi_panjang.php">Persegi panjang</a>
                <a class="nav-link" href="segitiga.php">Segitiga</a>
                <a class="nav-link" href="Lingkran.php">Lingkaran</a>
           </div>
          </div>
    </nav>

    <!-- NAVBAR -->

    <!-- CONTENT -->

    <div class="container">
    <div class="card mt-4">
        <div class="card-header bg-warning">
            <h3>Menghitung Luas Persegi panjang</h3>
        </div>
           <div class="card-body">
           <form method="POST">
                <div class="form-group mt-4">
                <tr>
                    <td>Masukan  Besar Panjang (CM)</td>
                    <td><input type='number' name="panjang" min="1" max="100000000000000000000"></td>
                </tr>
                </div>
                <div class="form-group mt-4">
                <tr>
                    <td>Masukan Besar Panjang (CM)</td>
                    <td><input type='number' name="lebar" min="1" max="100000000000000000000"></td>
                </tr>
                </div>
                    <button type="submit" name="simpan" class="btn btn-warning">Submit</button>
            </form>
            </div>
    </div>
    </div>

    <!-- CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['simpan'])){

    $a = $_POST['panjang'];
    $b = $_POST['lebar'];

    $persegi_panjang = $a * $b;

    echo " rumus menghitung luas persegi panjang  : panjang x lebar <br>";
    echo "Luas besar sisi pertama : $a <br>";
    echo "Luas besar sisi kedua : $b <br>";
    echo "Luas Persegi panjang : $persegi_panjang <br>";

}

?>