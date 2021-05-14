<?php 
    require 'functions1.php';
    $dosen = query("SELECT * FROM dosen");
    //tombol cari ditekan
    if(isset($_POST["cari"])){
        $dosen = cari_dosen($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Dosen</title>
</head>
<body>

<h1>Daftar Dosen</h1>
<h2>
    <a href="pageakun.php">Daftar Akun</a>
    <a href="pagemahasiswa.php">Daftar mahasiswa</a>
    <a href="pagekurikulum.php">Daftar Kurikulum</a>
</h2>
<a href="tambahakun.php">Buat Akun</a>
<a href="tambahdosen.php">Tambah Data Dosen</a>
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
        <th>ID Dosen</th>
        <th>Nama Dosen</th>
        <th>Alamat</th>
        <th>Akun</th>


    <?php $i = 1; ?>
    <?php foreach($dosen as $row) : ?>
    </tr>
        <td><?= $i;?></td>
        <td>
            <a href="hapusdosen.php?ID_Dosen=<?=$row["ID_Dosen"];?>" onclick="return confirm('yakin?');">Hapus</a> | 
            <a href="editdosen.php?ID_Dosen=<?=$row["ID_Dosen"];?>">Edit</a>
        </td>
        <td><?= $row["ID_Dosen"]?></td>
        <td><?= $row["NamaDsn"]?></td>
        <td><?= $row["Alamat"]?></td>
        <td><?= $row["username"]?></td>
    <tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html> 