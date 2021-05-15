<?php 
    require 'functions1.php';
    $kurikulum = query("SELECT * FROM kurikulum");

    //tombol cari ditekan
    if(isset($_POST["cari"])){
        $kurikulum = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
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

    <!-- Tittle -->
    <title>Halaman Kurikulum</title>
</head>
<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#172D44;">
      <div class="container">
        <a class="navbar-brand" href="adminpage.php">Portal Web FMIPA Unpad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- drop down actions dan data -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
            <a class="btn btn-outline-light dropdown-toggle me-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Actions
            </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="tambahkurikulum.php">Tambah Data Matkul</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Data
            </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pageakun.php">Daftar Akun</a></li>
                <li><a class="dropdown-item" href="pagedosen.php">Daftar Dosen</a></li>
                <li><a class="dropdown-item" href="pagemahasiswa.php">Daftar Mahasiswa</a></li>
              </ul>
            </li>


        <!-- search -->
        <div class="container-fluid">
            <form class="d-flex" actions="" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
            <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
             </form>
         </div>

        <!-- home sama globe -->
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
              <a class="nav-link btn btn-secondary tombol" href="landingPage.php">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

<div class="container">
    <!-- content -->
    <h1 class="text-center" style="color:#172D44;">Daftar Mata Kuliah</h1>

    <table border="1" cellpadding="10" cellspacing="0" class="table">
        <tr>

            <thead style="background-color:#172D44;" class="text-white">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Aksi</th>
                <th scope="col">ID Matkul</th>
                <th scope="col">Deskripsi Materi</th>
                <th scope="col">SKS</th>
                <th scope="col">Semester</th>
                <th scope="col">ID Dosen</th>
                </tr>
            </thead>

        <?php $i = 1; ?>
        <?php foreach($kurikulum as $row) : ?>
        </tr>
            <td><?= $i;?></td>
            <td>
                <a href="hapuskurikulum.php?ID_Matkul=<?=$row["ID_Matkul"];?>" onclick="return confirm('yakin?');" class="btn btn-outline-primary fs-6 text-decoration-none">Hapus</a> | 
                <a href="editkurikulum.php?ID_Matkul=<?=$row["ID_Matkul"];?>" class="btn btn-outline-primary fs-6 text-decoration-none">Edit</a>
            </td>
            <td><?= $row["ID_Matkul"]?></td>
            <td><?= $row["Deskripsi_Materi"]?></td>
            <td><?= $row["SKS"]?></td>
            <td><?= $row["Semester"]?></td>
            <td><?= $row["ID_Dosen"]?></td>
        <tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    <!-- akhir content -->
</div>
<!-- akhir container -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html> 