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
    <style>
        .tab {
            display: inline-block;
            margin-left: 40px;
        }

    </style>
    <meta charset="UTF-8">
    <title>Tambah Data Dosen</title>
</head>
<body>
    <h1>Tambah data Dosen</h1>
    <a href="pagedosen.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username<span class="tab"></span>:</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="ID_Dosen">ID_Dosen<span class="tab"></span>:</label>
                <input type="text" name="ID_Dosen" id="ID_Dosen" required>
            </li>
            <li>
                <label for="NamaDsn">Nama <span class="tab"></span>:</label>
                <input type="text" name="NamaDsn" id="NamaDsn" required>
            </li>
            <li>
                <label for="Alamat">Alamat <span class="tab"></span>:</label>
                <input type="text" name="Alamat" id="Alamat" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
</body>
</html> 