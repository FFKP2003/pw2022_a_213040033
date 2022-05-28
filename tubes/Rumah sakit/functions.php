<?php  


function connection() { 
    $conn = mysqli_connect('localhost', 'root', '', 'rumah_sakit') or die('KONEKSI GAGAL!');
    
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

    $Id_Pasien = $data["id_pasien"];
    $Nama_Pasien = htmlspecialchars($data["nama_pasien"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Jenis_Kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $No_Telepon = htmlspecialchars($data["no_telepon"]);
    $Id_Dokter = htmlspecialchars($data["id_dokter"]);

    $query = "INSERT INTO
                tbl_pasien
                VALUES
                (null, '$Nama_Pasien','$Alamat','$Jenis_Kelamin','$No_Telepon','$Id_Dokter')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
function hapus_pasien($Id_Pasien) {
    $conn = connection();
    mysqli_query ($conn, "DELETE FROM tbl_pasien WHERE id_pasien = $Id_Pasien") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah_pasien($data) {
    $conn = connection();

    $Id_Pasien = $data["id_pasien"];
    $Nama_Pasien = htmlspecialchars($data["nama_pasien"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Jenis_Kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $No_Telepon = htmlspecialchars($data["no_telepon"]);
    $Id_Dokter = htmlspecialchars($data["id_dokter"]);

    $query = "UPDATE tbl_pasien SET 
             nama_pasien = '$Nama_Pasien',
             alamat = '$Alamat',
             jenis_kelamin ='$Jenis_Kelamin',
             no_telepon = '$No_Telepon',
             id_dokter = '$Id_Dokter'
             WHERE id_pasien = $Id_Pasien
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


?>