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
    
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!-- NAVBAR -->

    <!-- CONTENT -->

    <div class="card mt-5 ml-5 mr-5">
        <div class="card-header text-white bg-success">
            Form
        </div>
          <div class="card-body bg-dark text-white">
            <form action="" method="POST">
                <div class="form-group">
                    <label> Nama Depan</label>
                    <input type="text" class="form-control" name="nama_depan">
                </div>
                <div class="form-group">
                    <label> Nama Belakang</label>
                    <input type="text" class="form-control" name="nama_belakang">
                </div>
                <div class="form-group">
                    <label> Tanggal lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="form-group mt-2">
                <tr>
                    <td>Jenis Kelamin</td>
                    <br>
                    <td><input type='radio' id='perempuan' name='jenis_kelamin' value='perempuan'>
                    <label for="perempuan">Perempuan</label></td>
                    <br>
                    <td><input type='radio' id='laki-laki' name='jenis_kelamin' value='laki-laki'>
                    <label for="laki-laki">Laki-Laki</label></td>
                </tr>
                </div>
                <div class="form-group">
                    <p>Agama</p>
                    <select  class="form-control" aria-label= "Default select example" name="agama">
                      <option value="">Pilih Agama</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Budha">Budha</option>
</select>
                </div>
                <div class="form-group mt-2">
                <label for="exampleInputPassword1">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="exampleInputPassword1" style="height: 100px"></textarea>
                </div>
                <div class="form-group">
                    <label> Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah">
                </div>
                <div class="form-group">
                    <label for="cars">Jurusan</label>
                    <select name="jurusan" class="form-control">
                      <option value="">Pilih Jurusan</option>
                      <option value="RPL">RPL</option>
                      <option value="TSM">TSM</option>
                      <option value="TKR">TKR</option>
</select>
                </div>
                <button type="submit" class="btn btn-success" name="simpan">Daftar</button>
            </form>
        </div>
    </div>

 <div class="card container text-center text-white bg-primary mb-3 mt-4" style="max-width : 30rem">
 <div class="card-header">Hasil pendaftaran</div>
 <div class="card-body">
    <h5 class="card-title">Pendaftaran sukses!</h5>
    <p class="card-text"></p>
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
  $Nama_depan = $_POST['nama_depan'];
  $Nama_belakang = $_POST['nama_belakang'];
  $Tanggal_lahir = $_POST['tanggal_lahir'];
  $Jenis_kelamin = $_POST['jenis_kelamin'];
  $Agama = $_POST['agama'];
  $Alamat = $_POST['alamat'];
  $Asal_sekolah = $_POST['asal_sekolah'];
  $Jurusan = $_POST['jurusan'];
  
  class Tampil{
  
   public function data_diri($Nama_depan2,$Nama_belakang2,$Tanggal_lahir2,$Jenis_kelamin2,$Agama2,$Alamat2,$Asal_sekolah2,$Jurusan2){
    

      echo "Nama depan : .$Nama_depan2";
      echo "<br>";
      echo "Nama belakang : .$Nama_belakang2";
      echo "<br>";
      echo "Tanggal lahir : .$Tanggal_lahir2";
      echo "<br>";
      echo "jenis kelamin : .$Jenis_kelamin2";
      echo "<br>";
      echo "Agama : .$Agama2";
      echo "<br>";
      echo "Alamat : .$Alamat2";
      echo "<br>";
      echo "Asal sekolah : .$Asal_sekolah2";
      echo "<br>";
      echo "Jurusan : .$Jurusan2";
      echo "<br>";
    }
}

  $cetak = new Tampil();

  echo $cetak ->data_diri($Nama_depan,$Nama_belakang,$Tanggal_lahir,$Jenis_kelamin,$Agama,$Alamat,$Asal_sekolah,$Jurusan);
}
?>