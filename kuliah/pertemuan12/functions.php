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

    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $Email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO
             mahasiswa
             VALUES
             (null, '$npm', '$nama', '$Email', '$jurusan', '$gambar')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn =Koneksi();
    mysqli_query ($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = Koneksi();

    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $Email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET 
             npm = '$npm',
             nama = '$nama',
             email ='$Email',
             jurusan = '$jurusan',
             gambar = '$gambar'
             WHERE id = $id
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>