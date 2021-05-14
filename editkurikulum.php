<?php 
require 'functions1.php';
$ID_Matkul = $_GET["ID_Matkul"];

//query data mahasiswa
$kurikulum = query("SELECT * FROM kurikulum WHERE ID_Matkul = $ID_Matkul")[0];

if(isset($_POST["submit"])){
    if(edit_kurikulum($_POST, $ID_Matkul) > 0){
        echo
        "<script>
            alert('data berhasil diubah!');
            document.location.href = 'pagekurikulum.php';
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
    <style>
        .tab {
            display: inline-block;
            margin-left: 40px;
        }

    </style>
    <meta charset="UTF-8">
    <title>Ubah Data Kurikulum</title>
</head>
<body>
    <h1>Ubah Data Kurikulumn</h1>
    <a href="pagekurikulum.php">Kembali</a>

    <form action="" method="post">
        <ul>

            <li>
                <label for="Deskripsi_Materi">Deskripsi Materi <span class="tab"></span>:</label>
                <input type="text" name="Deskripsi_Materi" id="Deskripsi_Materi" required value="<?=$kurikulum["Deskripsi_Materi"];?>">
            </li>

            <li>
                <label for="SKS">SKS <span class="tab"></span>:</label>
                <input type="text" name="SKS" id="SKS" required value="<?=$kurikulum["SKS"];?>">
            </li>

            <li>
                <label for="Semester">Semester <span class="tab"></span>:</label>
                <input type="text" name="Semester" id="Semester" required value="<?=$kurikulum["Semester"];?>">
            </li>

            <li>
                <label for="ID_Dosen">ID Dosen <span class="tab"></span>:</label>
                <input type="text" name="ID_Dosen" id="ID_Dosen" required value="<?=$kurikulum["ID_Dosen"];?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
</body>
</html> 