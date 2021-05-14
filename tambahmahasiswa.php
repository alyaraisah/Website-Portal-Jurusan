<?php 
require 'functions1.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo
        "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'pagemahasiswa.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('data gagal ditambahkan!');
        </script>";
    }
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#172D44;">
        <div class="container">

            <!-- kembali -->
            <div class="collapse navbar-collapse">
                <a href="pagemahasiswa.php" class="btn btn-outline-light">Kembali</a>
            </div>
            
            <!-- tulisan -->
            <a class="navbar-brand" href="#">Tambah Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            
        </div>
    </nav>
    <!-- akhir navbar -->

        <!-- form -->
        <br><br>
        <div class="container">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required aria-describedby="Help">
                    <div id="Help" class="form-text">Input username yang sudah ada, jika belum ada maka bisa buat akun terlebih dahulu</div>
                </div>

                <div class="mb-3">
                    <label for="no_mhs" class="form-label">Nomor Mahasiswa</label>
                    <input type="text" name="no_mhs" class="form-control" id="no_mhs" required aria-describedby="Help">
                    <div id="Help" class="form-text">Input nomor mahasiswa harus nomor baru</div>
                </div>

                <div class="mb-3">
                    <label for="NamaMhs" class="form-label">Nama</label>
                    <input type="text" name="NamaMhs" class="form-control" id="NamaMhs" required>
                </div>

                <div class="mb-3">
                    <label for="NPM" class="form-label">NPM</label>
                    <input type="text" name="NPM" class="form-control" id="NPM" required>
                </div>

                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" name="Alamat" class="form-control" id="Alamat" required>
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html> 