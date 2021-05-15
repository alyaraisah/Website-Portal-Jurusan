<?php 
    $conn = mysqli_connect("localhost", "root", "", "fakultas");

    //fungsi fetch
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }


    //fungsi hapus
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE no_mhs = $id");

        return mysqli_affected_rows($conn);
    }

    function hapus_dosen($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM dosen WHERE ID_Dosen = $id");

        return mysqli_affected_rows($conn);
    }

    function hapus_kurikulum($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM kurikulum WHERE ID_Matkul = $id");

        return mysqli_affected_rows($conn);
    }
    


    //fungsi tambah
    function tambah($data) {
        global $conn;
        $npm = htmlspecialchars($data["NPM"]);
        $nama = htmlspecialchars($data["NamaMhs"]);
        $alamat = htmlspecialchars($data["Alamat"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $no_mhs = htmlspecialchars($data["no_mhs"]);
        $username = htmlspecialchars($data["username"]);

        $query = "INSERT INTO mahasiswa VALUES ('$no_mhs','$nama','$alamat','$npm','$jurusan','103','$username')";
        mysqli_query($conn, $query);

    
        return mysqli_affected_rows($conn);
    }
    function tambah_dosen($data) {
        global $conn;
        $ID_Dosen = htmlspecialchars($data["ID_Dosen"]);
        $NamaDsn = htmlspecialchars($data["NamaDsn"]);
        $alamat = htmlspecialchars($data["Alamat"]);
        $username = htmlspecialchars($data["username"]);

        $query = "INSERT INTO dosen VALUES ('$ID_Dosen','$NamaDsn','$alamat','103','$username')";
        mysqli_query($conn, $query);

    
        return mysqli_affected_rows($conn);
    }

    function tambah_kurikulum($data) {
        global $conn;
        $ID_Matkul = htmlspecialchars($data["ID_Matkul"]);
        $SKS = htmlspecialchars($data["SKS"]);
        $Semester = htmlspecialchars($data["Semester"]);
        $Deskripsi_Materi = htmlspecialchars($data["Deskripsi_Materi"]);
        $ID_Dosen = htmlspecialchars($data["ID_Dosen"]);

        $query = "INSERT INTO Kurikulum VALUES ('$ID_Matkul','$SKS','$Semester','$Deskripsi_Materi','$ID_Dosen', '103 ')";
        mysqli_query($conn, $query);

    
        return mysqli_affected_rows($conn);
    }

    function buatAkun($data) {
        global $conn;
        $username = htmlspecialchars($data["username"]);
        $pw = htmlspecialchars($data["pw"]);
        $email = htmlspecialchars($data["email"]);

        $query = "INSERT INTO akun VALUES ('$username','$pw','$email')";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    //fungsi update
    function edit($data, $id){
        global $conn;
        $npm = htmlspecialchars($data["NPM"]);
        $nama = htmlspecialchars($data["NamaMhs"]);
        $alamat = htmlspecialchars($data["Alamat"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $query = "UPDATE mahasiswa SET NPM = '$npm', NamaMhs = '$nama', Alamat = '$alamat', jurusan = '$jurusan' WHERE no_mhs = '$id'";
        mysqli_query($conn, $query);

    
        return mysqli_affected_rows($conn);
    }

    function edit_dosen($data, $id){
        global $conn;
        $nama = htmlspecialchars($data["NamaDsn"]);
        $alamat = htmlspecialchars($data["Alamat"]);

        $query = "UPDATE dosen SET NamaDsn = '$nama', Alamat = '$alamat' WHERE ID_dosen = '$id'";
        mysqli_query($conn, $query);

    
        return mysqli_affected_rows($conn);
    }

    function edit_kurikulum($data, $id){
        global $conn;
        $Deskripsi_Materi = htmlspecialchars($data["Deskripsi_Materi"]);
        $SKS = htmlspecialchars($data["SKS"]);
        $Semester = htmlspecialchars($data["Semester"]);
        $ID_Dosen = htmlspecialchars($data["ID_Dosen"]);

        $query = "UPDATE kurikulum SET Deskripsi_Materi = '$Deskripsi_Materi', SKS = '$SKS', Semester = '$Semester', ID_Dosen = '$ID_Dosen' WHERE ID_Matkul = '$id'";
        mysqli_query($conn, $query);

    
        return mysqli_affected_rows($conn);
    }

    //fungsi cari
    function cari($keyword){
        global $conn;
        $query = "SELECT * FROM mahasiswa WHERE NamaMhs LIKE '%$keyword%' OR NPM LIKE '%$keyword%' OR Alamat LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR username LIKE '%$keyword%'";

        return query($query);
    }

    function cari_dosen($keyword){
        global $conn;
        $query = "SELECT * FROM dosen WHERE ID_Dosen LIKE '%$keyword%' OR NamaDsn LIKE '%$keyword%' OR Alamat LIKE '%$keyword%' OR username LIKE '%$keyword%'";

        return query($query);
    }

    function cari_akun($keyword){
        global $conn;
        $query = "SELECT * FROM akun WHERE pw LIKE '%$keyword%' OR email LIKE '%$keyword%' OR  username LIKE '%$keyword%'";

        return query($query);
    }

    function cari_kurikulum($keyword){
        global $conn;
        $query = "SELECT * FROM kurikulum WHERE ID_Dosen LIKE '%$keyword%' OR ID_Matkul LIKE '%$keyword%' OR  SKS LIKE '%$keyword%' OR Semester LIKE '%$keyword%' OR Deskripsi_Materi LIKE '%$keyword%'";

        return query($query);
    }
?>