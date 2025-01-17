<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&display=swap" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Portal Web FMIPA Unpad</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#172D44;">
      <div class="container">
        <a class="navbar-brand" href="#">Portal Web FMIPA Unpad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-globe"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">English (en)</a></li>
                <li><a class="dropdown-item" href="#">Indonesia (id)</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-secondary tombol" href="login.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbutron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><br><br><br> Selamat Datang <br>
          <span>Dosen dan Mahasiswa</span> <br>
          FMIPA Universitas Padjadjaran</h1>
        <p class="lead"></p>
      </div>
    </div>
    <!-- Akhir Jumbutron -->

    <!-- Container -->
    <div class="container">

    <!-- Info Panel  -->
    <div class="row justify-content-center">
      <div class="col-9 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/employee.png" alt="Employee" class="float-start">
            <h5>Easy Access</h5>
            <p>Akses mudah dan cepat</p>
          </div>
          <div class="col-lg">
            <img src="img/organized.png" alt="High Res" class="float-start">
            <h5>ogranized</h5>
            <p>Data terorganisir dengan baik</p>
          </div>
          <div class="col-lg">
            <img src="img/accur.png" alt="security" class="float-start">
            <h5>accurate</h5>
            <p>Data diperbarui secara otomatis untuk menjaga akurasinya</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir info panel -->

    <!-- Penjelasan -->
    <div class="row penjelasan">
      <div class="col-lg-6">
        <img src="img/data.png" alt="penjelasan" class="img-fluid">
      </div>
      <div class="col-lg-5">
        <h3>Portal<span> Web</span> FMIPA<span> Unpad</span></h3>
        <p>Merupakan web penyedia layanan informasi mengenai data 
          dosen, mahasiswa, dan kurikulum yang dapat diakses oleh dosen 
          dan mahasiswa FMIPA Universitas Padjadjaran melalui berbagai 
          perangkat seperti desktop, mobile, dan tablet.</p>
        <a href="" class="btn btn-secondary tombol">Masuk</a>
      </div>
    </div>
    <!-- akhir penjelasan -->

    <!-- Bintang  -->
    <div class="row justify-content-center">
      <div class="col-9 bintang">
        <div class="row">
          <div class="col-lg">
            <img src="img/bintang.png" alt="bintang" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir bintang -->

    <!-- Testimonial -->
    <section class="testimonial">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h5>"Tampilannya makin keren, mempermudah melihat data-data keperluan kuliah"</h5>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-6 justify-content-center d-flex">
          <figure class="figure">
            <img src="img/hali.png" class="figure-img img-fluid rounded-circle" alt="Testi 1">
          </figure>
          <figure class="figure">
            <img src="img/alya.png" class="figure-img img-fluid rounded-circle utama" alt="Testi 2">
            <figcaption class="figure-caption">
              <h5>Nabila Putri H</h5>
              <p>Mahasiswa Aktuaria</p>
            </figcaption>
          </figure>
          <figure class="figure">
            <img src="img/nabil.png" class="figure-img img-fluid rounded-circle" alt="Testi 3">
          </figure>
        </div>
      </div>
    </section>
    <!-- Akhir testimonial -->

    <!-- footer 
    <div class="row footer">
      <div class="col">
        <div class="p">Hubungi kami</div>
      </div>
    </div>-->
  
    </div >
    <!-- Akhir Container -->

    <!-- Jumbutron footer -->
     <div class="jumbotron-footer jumbotron-fluid">
      <div class="container">
        <h1 class="display-4-footer"><span><br><br>HUBUNGI KAMI</span>

          <br><br>Telp: 085759314557; 085225999797
          <br>Email: elearning@unpad.ac.id
          <br>Office: Gedung Graha Kandaga, Lt 4.
          <br>Kampus Unpad Jatinagor, Sumedang, 45363
          <span></span> </h1>
        <p class="lead-footer"><br>© UNIVERSITAS PADJADJARAN All rights reserved</p>
      </div>
    </div>
    <!-- akhir footer -->

    <!-- header 
    <header>
      <h1><a href="index.html">Portal Web FMIPA Unpad</a></h1>
      <ul>
          <li><a href="login.html">Log In</a></li>
      </ul>
    </header>  
    -->









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>
