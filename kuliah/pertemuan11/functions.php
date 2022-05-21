<?php  

function Koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040033') or die('KONEKSI GAGAL!');

    return $conn;
}

function query($query) {
    $conn = Koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
     $rows[] = $row;
    }
    return $rows;
}




function tambah($data) {
    $conn = Koneksi();
    $npm = $data["npm"];
    $Email = $data["Email"];
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO
             mahasiswa
             VALUES
             (null, '$npm', '$nama', '$Email', '$jurusan', '$gambar')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}



?>