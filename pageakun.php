<?php 
    require 'functions1.php';
    $akun = query("SELECT * FROM akun");

    //tombol cari ditekan
    if(isset($_POST["cari"])){
        $akun = cari_akun($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Akun</title>
</head>
<body>

<h1>Daftar Akun</h1>
<h2>
    <a href="pagemahasiswa.php">Daftar Mahasiswa</a>
    <a href="pagedosen.php">Daftar Dosen</a>
</h2>
<a href="tambahakun.php">Buat Akun</a>
<br><br>
<form actions="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Input keyword..." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>
<br>

<p id="table mahasiswa">Akun Mahasiswa</p>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>username</th>
        <th>password</th>
        <th>email</th>


    <?php $i = 1; ?>
    <?php foreach($akun as $row) : ?>
    </tr>
        <td><?= $i;?></td>
        <td><?= $row["username"]?></td>
        <td><?= $row["pw"]?></td>
        <td><?= $row["email"]?></td>

    <tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html> 