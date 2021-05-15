<?php 
require 'functions1.php';

if(isset($_POST["submit"])){
    if(tambah_dosen($_POST) > 0){
        echo
        "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'pagedosen.php';
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
    <title>Tambah Data Dosen</title>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#172D44;">
        <div class="container">

            <!-- kembali -->
            <div class="collapse navbar-collapse">
                <a href="pagedosen.php" class="btn btn-outline-light">Kembali</a>
            </div>
            
            <!-- tulisan -->
            <a class="navbar-brand" href="#">Tambah Data Dosen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                    <label for="ID_Dosen" class="form-label">ID Dosen</label>
                    <input type="text" name="ID_Dosen" class="form-control" id="ID_Dosen" required aria-describedby="Help">
                    <div id="Help" class="form-text">Input ID Dosen harus nomor baru</div>
                </div>

                <div class="mb-3">
                    <label for="NamaDsn" class="form-label">Nama</label>
                    <input type="text" name="NamaDsn" class="form-control" id="NamaDsn" required>
                </div>

                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" name="Alamat" class="form-control" id="Alamat" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</body>
</html> 