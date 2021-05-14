<?php 
require 'functions1.php';

if(isset($_POST["submit"])){
    if(tambah_kurikulum($_POST) > 0){
        echo
        "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'pagekurikulum.php';
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
    <title>Tambah Data Kurikulum</title>
</head>
<body>
    <h1>Tambah data Matkul</h1>
    <a href="pagekurikulum.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="ID_Matkul">ID_Matkul<span class="tab"></span>:</label>
                <input type="text" name="ID_Matkul" id="ID_Matkul" required>
            </li>
            <li>
                <label for="SKS">SKS<span class="tab"></span>:</label>
                <input type="text" name="SKS" id="SKS" required>
            </li>
            <li>
                <label for="Semester">Semester <span class="tab"></span>:</label>
                <input type="text" name="Semester" id="Semester" required>
            </li>

            <li>
                <label for="Deskripsi_Materi">Deskripsi_Materi<span class="tab"></span>:</label>
                <input type="text" name="Deskripsi_Materi" id="Deskripsi_Materi" required>
            </li>

            <li>
                <label for="ID_Dosen">ID_Dosen <span class="tab"></span>:</label>
                <input type="text" name="ID_Dosen" id="ID_Dosen" required>
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
</body>
</html> 