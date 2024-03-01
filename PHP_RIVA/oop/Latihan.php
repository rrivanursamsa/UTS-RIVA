<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="Latihan.php">BIODATA<span class="sr-only">(current)</span></a>
      <a class="nav-link" href="persegi.php">persegi</a>  
      <a class="nav-link" href="persegi_panjang">persegi panjang</a>  
      <a class="nav-link" href="segitiga.php">segitiga</a>
      <a class="nav-link" href="Lingkaran.php">lingkaran</a>      
    </div>
  </div>
</nav>

<!-- navbar -->
<!-- conten -->
<div class="container">
<div class="card mt-4">
  <div class="card-header">
    BIODATA
  </div>
  <div class="card-body bg-warning">
  <form method="POST">
  <div class="form-group">
    <label for="exampleInputPassword1">Nama depan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="namadepan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama belakang</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="namabelakang">
  </div>
  <div class="form-group mt-2">
    <tr>
        <td>Jenis Kelamin</td>
        <br>
        <td><input type='radio' id='perempuan' name='jeniskelamin' value='perempuan'>
    <label for="perempuan">Perempuan</label></td>
    <br>
    <td><input type='radio' id='laki-laki' name='jeniskelamin' value='laki-laki'>
    <label for="perempuan">Laki-laki</label></td>
    </tr>
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">tempat tanggal lahir</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tempattanggallahir">
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Agama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="agama">
  </div>
  <div class="form-group mt-4">
        <tr>
            <td>Nomer telepon</td>
                <td><input type='number' id='telepon' name='nomertelepon' min='15' max='100000000000000000'></td>
        </tr>
        <br>
    </div>
    <div class="form-group mt-2">
                <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" name="alamat" style="height: 100px"></textarea>
                </div>
  <button type="submit"  name="simpan" class="btn btn-primary mt-5">Submit</button>
</form>
  </div>
</div>
</div>
<!-- conten -->

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
    $Nama_depan = $_POST['namadepan'];
    $Nama_belakang = $_POST['namabelakang'];
    $Jenis_Kelamin = $_POST['jeniskelamin'];
    $tempat_tanggal_lahir = $_POST['tempattanggallahir'];
    $Agama = $_POST['agama'];
    $Nomer_telepon = $_POST['nomertelepon'];
    $Alamat = $_POST['alamat'];
    
class biodata{

function bio($Nama_depan){
  
}
}
}
?>