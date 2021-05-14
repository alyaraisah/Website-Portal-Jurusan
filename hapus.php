<?php 
    require 'functions1.php';

    $no_mhs = $_GET["no_mhs"];

    if(hapus($no_mhs) > 0){
        echo
        "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'pagemahasiswa.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('data gagal dihapus!);
        </script>";
    }
?>