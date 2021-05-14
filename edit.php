<?php 
require 'functions1.php';
$no_mhs = $_GET["no_mhs"];

//query data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE no_mhs = $no_mhs")[0];

if(isset($_POST["submit"])){
    if(edit($_POST, $no_mhs) > 0){
        echo
        "<script>
            alert('data berhasil diubah!');
            document.location.href = 'pagemahasiswa.php';
        </script>";
    } else {
        echo("Error description: " . mysqli_error($conn));
        echo 
        "<script>
            alert('data gagal diubah!);
            document.location.href = 'pagemahasiswa.php';
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>
    <a href="pagemahasiswa.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <!-- <li>
                <label for="no_mhs">no_mhs<span class="tab"></span>:</label>
                <input type="text" name="no_mhs" id="no_mhs" required value="<?=$mhs["no_mhs"];?>">
            </li> -->
            <li>
                <label for="NamaMhs">Nama <span class="tab"></span>:</label>
                <input type="text" name="NamaMhs" id="NamaMhs" required value="<?=$mhs["NamaMhs"];?>">
            </li>

            <li>
                <label for="NPM">NPM<span class="tab"></span>:</label>
                <input type="text" name="NPM" id="NPM" required value="<?=$mhs["NPM"];?>">
            </li>

            <li>
                <label for="Alamat">Alamat <span class="tab"></span>:</label>
                <input type="text" name="Alamat" id="Alamat" required value="<?=$mhs["Alamat"];?>">
            </li>

            <li>
                <label for="jurusan">Jurusan <span class="tab"></span>:</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?=$mhs["jurusan"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
</body>
</html> 