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
    <style>
        .tab {
            display: inline-block;
            margin-left: 40px;
        }

    </style>
    <meta charset="UTF-8">
    <title>Ubah Data Dosen</title>
</head>
<body>
    <h1>Ubah Data Dosen</h1>
    <a href="pagedosen.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="NamaDsn">Nama <span class="tab"></span>:</label>
                <input type="text" name="NamaDsn" id="NamaDsn" required value="<?=$dsn["NamaDsn"];?>">
            </li>

            <li>
                <label for="Alamat">Alamat <span class="tab"></span>:</label>
                <input type="text" name="Alamat" id="Alamat" required value="<?=$dsn["Alamat"];?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
</body>
</html> 