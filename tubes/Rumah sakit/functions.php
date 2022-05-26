<?php  


function connection() {
    
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040033') or die('KONEKSI GAGAL!');
    
    return $conn;
}
    
function query($query) {
    $conn = connection();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }
    return $rows;
}

function tambah_data_pasien($data) {
    $conn = connection();
    $Nama_Pasien = $data["nama_pasien"];
    $Alamat = $data["alamat"];
    $Jenis_Kelamin = $data["jenis_kelamin"];
    $No_Telepon = $data["no_telepon"];
    $Id_Dokter = $data["id_dokter"];

    $query = "INSERT INTO
                tbl_pasien
                VALUE
                (null, '$Nama_Pasien','$Alamat','$Jenis_Kelamin','$No_Telepon','$Id_Dokter')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}



?>