<?php 
    require 'functions1.php';

    $ID_Dosen = $_GET["ID_Dosen"];

    if(hapus_dosen($ID_Dosen) > 0){
        echo
        "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'pagedosen.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('data gagal dihapus!);
        </script>";
    }
?>