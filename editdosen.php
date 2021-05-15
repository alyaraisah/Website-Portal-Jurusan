<?php 
require 'functions1.php';
$ID_Dosen = $_GET["ID_Dosen"];

//query data mahasiswa
$dsn = query("SELECT * FROM dosen WHERE ID_Dosen = $ID_Dosen")[0];

if(isset($_POST["submit"])){
    if(edit_dosen($_POST, $ID_Dosen) > 0){
        echo
        "<script>
            alert('data berhasil diubah!');
            document.location.href = 'pagedosen.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('data gagal diubah!);
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
    <title>Ubah Data Dosen</title>
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
            <a class="navbar-brand" href="#">Ubah Data Dosen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            
        </div>
    </nav>
    <!-- akhir navbar -->

    <br><br>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="NamaDsn" class="form-label">Nama </label>
                <input type="text" name="NamaDsn" id="NamaDsn" required value="<?=$dsn["NamaDsn"];?>" class="form-control">
            </div>

             <div class="mb-3">
                <label for="Alamat"  class="form-label">Alamat </label>
                <input type="text" name="Alamat" id="Alamat" required value="<?=$dsn["Alamat"];?>" class="form-control">
            </div>

            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html> 