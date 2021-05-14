<?php 
require 'functions1.php';

if(isset($_POST["submit"])){
    if(buatAkun($_POST) > 0){
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
    <title>Buat Akun</title>
</head>
<body>
    <h1>Buat Akun</h1>
    <a href="pagemahasiswa.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username <span class="tab"></span>:</label>
                <input type="text" name="username" id="username" required>
            </li>

            <li>
                <label for="pw">password<span class="tab"></span>:</label>
                <input type="text" name="pw" id="pw" required>
            </li>

            <li>
                <label for="email">email<span class="tab"></span>:</label>
                <input type="text" name="email" id="email" required>
            </li>
                <button type="submit" name="submit">Buat Akun</button>
            </li>
        </ul>
</body>
</html> 