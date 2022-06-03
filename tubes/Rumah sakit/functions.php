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

    $Nama_Pasien = htmlspecialchars($data["nama_pasien"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Jenis_Kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $No_Telepon = htmlspecialchars($data["no_telepon"]);
    $Id_Dokter = htmlspecialchars($data["id_dokter"]);

    $query = "INSERT INTO
                tbl_pasien
                VALUES
                (null, '$Nama_Pasien','$Alamat','$Jenis_Kelamin','$No_Telepon',$Id_Dokter)";
    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function tambah_data_dokter($data) {
    $conn = connection(); 

    $Id_Dokter = $data["id_dokter"];
    $Nama_Dokter = htmlspecialchars($data["nama_dokter"]);
    $Spesialis = htmlspecialchars($data["spesialis"]);
    $Jadwal_Praktik = htmlspecialchars($data["jadwal_praktik"]);
    $Gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO
                tbl_dokter
                VALUES
                (null, '$Nama_Dokter','$Spesialis','$Jadwal_Praktik','$Gambar')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambah_data_user($data) {
    $conn = connection(); 

    $Id_User = $data["id_user"];
    $Username = htmlspecialchars($data["username"]);
    $Password = htmlspecialchars($data["password"]);
    $Status = htmlspecialchars($data["status"]);
    $Role = htmlspecialchars($data["role"]);

    $query = "INSERT INTO
                tbl_user
                VALUES
                (null, '$Username','$Password','$Status','$Role')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_pasien($Id_Pasien) {
    $conn = connection();
    mysqli_query ($conn, "DELETE FROM tbl_pasien WHERE id_pasien = $Id_Pasien") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_dokter($Id_Dokter) {
    $conn = connection();
    mysqli_query ($conn, "DELETE FROM tbl_dokter WHERE id_dokter = $Id_Dokter") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
function hapus_user($Id_User) {
    $conn = connection();
    mysqli_query ($conn, "DELETE FROM tbl_user WHERE id_user = $Id_User") or die(mysqli_error($conn));

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

function ubah_dokter($data) {
    $conn = connection();

    $Id_Dokter = $data["id_dokter"];
    $Nama_Dokter = htmlspecialchars($data["nama_dokter"]);
    $Spesialis = htmlspecialchars($data["spesialis"]);
    $Jadwal_Praktik = htmlspecialchars($data["jadwal_praktik"]);
    $Gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE tbl_dokter SET 
             nama_dokter = '$Nama_Dokter',
             spesialis = '$Spesialis',
             jadwal_praktik ='$Jadwal_Praktik',
             gambar = '$Gambar'
             WHERE id_dokter = $Id_Dokter
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah_user($data) {
    $conn = connection();

    var_dump($data);
    $Id_User = $data["id_user"];
    $Username = htmlspecialchars($data["username"]);
    $Password = htmlspecialchars($data["password"]);
    $Status = htmlspecialchars($data["status"]);
    $Role = htmlspecialchars($data["role"]);

    $query = "UPDATE tbl_user SET 
             username = '$Username',
             password = '$Password',
             status ='$Status',
             role = '$Role'
             WHERE id_user = $Id_User
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function Search($keyword) {
    $conn = connection();

    $query = "SELECT * FROM tbl_pasien
              WHERE
              nama_pasien LIKE '%$keyword%' OR 
              alamat LIKE '%$keyword%' OR 
              jenis_kelamin LIKE '%$keyword%' OR
              no_telepon LIKE '%$keyword%'
              ";

    $result = mysqli_query($conn, $query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}

return $rows;

}

function Cari($keyword) {
    $conn = connection();

    $query = "SELECT * FROM tbl_dokter
              WHERE
              nama_dokter LIKE '%$keyword%' OR 
              Spesialis LIKE '%$keyword%'
              ";

    $result = mysqli_query($conn, $query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}

return $rows;

}
function Search_User($keyword) {
    $conn = connection();

    $query = "SELECT * FROM tbl_user
              WHERE
              username LIKE '%$keyword%' OR 
              password LIKE '%$keyword%' 
          
              ";

    $result = mysqli_query($conn, $query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}

return $rows;

}

function login_admin($data) {
    $conn = connection();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    

    $admin = query("SELECT * FROM tbl_user WHERE username='$username' AND status=1")[0];


    if ($admin) { // cek data
        if ($admin['password'] == $password) {
           $pesan = "Admin berhasil login";
            header("Location: dashboard.php?pesan={$pesan}");
            exit;
        }else{
            return [
                'error' => true,
                'pesan' => 'Username / Password Tidak Valid, Silahkan Hubungi Admin!'
            ]; 
        }
    }else {
        return [
            'error' => true,
            'pesan' => 'Username tidak terdaftar'
        ];
    }
}

function login_user($data) {
    $conn = connection();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if ($username == 'User' && $password == 'User') {
        header("Location: dashboard.php");
        exit;
    }else {
        return [
            'error' => true,
            'pesan' => 'Username / Password Tidak Valid!'
        ];
    }
}
