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
    <style>
        .tab {
            display: inline-block;
            margin-left: 40px;
        }

    </style>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <a href="pagemahasiswa.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username<span class="tab"></span>:</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="no_mhs">no_mhs<span class="tab"></span>:</label>
                <input type="text" name="no_mhs" id="no_mhs" required>
            </li>
            <li>
                <label for="NamaMhs">Nama <span class="tab"></span>:</label>
                <input type="text" name="NamaMhs" id="NamaMhs" required>
            </li>

            <li>
                <label for="NPM">NPM<span class="tab"></span>:</label>
                <input type="text" name="NPM" id="NPM" required>
            </li>

            <li>
                <label for="Alamat">Alamat <span class="tab"></span>:</label>
                <input type="text" name="Alamat" id="Alamat" required>
            </li>

            <li>
                <label for="jurusan">Jurusan <span class="tab"></span>:</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
</body>
</html> 