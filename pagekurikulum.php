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
    <meta charset="UTF-8">
    <title>Halaman Kurikulum</title>
</head>
<body>

<h1>Daftar Matkul</h1>
<h2>
    <a href="pageakun.php">Daftar Akun</a>
    <a href="pagedosen.php">Daftar Dosen</a>
    <a href="pagemahasiswa.php">Daftar Mahasiswa</a>
</h2>

<a href="tambahkurikulum.php">Tambah Data Matkul</a>
<br><br>
<form actions="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Input keyword..." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>ID_Matkul</th>
        <th>Deskripsi Materi</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>ID Dosen</th>


    <?php $i = 1; ?>
    <?php foreach($kurikulum as $row) : ?>
    </tr>
        <td><?= $i;?></td>
        <td>
            <a href="hapuskurikulum.php?ID_Matkul=<?=$row["ID_Matkul"];?>" onclick="return confirm('yakin?');">Hapus</a> | 
            <a href="editkurikulum.php?ID_Matkul=<?=$row["ID_Matkul"];?>">Edit</a>
        </td>
        <td><?= $row["ID_Matkul"]?></td>
        <td><?= $row["Deskripsi_Materi"]?></td>
        <td><?= $row["SKS"]?></td>
        <td><?= $row["Semester"]?></td>
        <td><?= $row["ID_Dosen"]?></td>
    <tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html> 