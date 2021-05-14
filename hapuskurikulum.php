<?php 
    require 'functions1.php';

    $ID_Matkul = $_GET["ID_Matkul"];

    if(hapus_kurikulum($ID_Matkul) > 0){
        echo
        "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'pagekurikulum.php';
        </script>";
    } else {
        echo 
        "<script>
            alert('data gagal dihapus!);
        </script>";
    }
?>