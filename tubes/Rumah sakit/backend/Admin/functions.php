<?php
session_start();
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
      // cek apakah user tidak memilih gambar
      if ($_FILES["gambar"]["error"] === 4) {
        // beri gambar default
        $gambar ='no photo.png';
    } else {
        // lakukan fungsi upload
        $gambar = upload();

        // cek jika upload gambar
        if (!$gambar) {
            return false;
        }
    }
    $Nama_Dokter = htmlspecialchars($data["nama_dokter"]);
    $Spesialis = htmlspecialchars($data["spesialis"]);
    $Jadwal_Praktik = htmlspecialchars($data["jadwal_praktik"]);
    $Gambar = $gambar;

    $query = "INSERT INTO
                tbl_dokter
                VALUES
                (null, '$Nama_Dokter','$Spesialis','$Jadwal_Praktik','$Gambar')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambah_data_user($data) {
    $conn = connection(); 

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

    // query dokter berdasarkan id
    $tbl_d = query("SELECT * FROM tbl_dokter WHERE id_dokter = $Id_Dokter") [0];
    // cek jika gambar default
    if ($tbl_d["gambar"] !== 'no photo.png'); {
        // hapus gambar
        unlink('../../Assets/img/' . $tbl_d["gambar"]);
    }
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

    $dokter = query("SELECT * FROM tbl_dokter WHERE id_dokter = {$Id_Dokter}")[0];

    $gambar = $dokter['gambar'];
    if ($_FILES["gambar"]["error"] === 4) {
        // beri gambar default
        $gambar = $dokter['gambar'];
    } else {
        // lakukan fungsi upload

        if ($dokter['gambar'] != 'no photo.png' ) {
            unlink("../../Assets/img/".$dokter['gambar']);
            $gambar = upload();
        }else{
            $gambar = upload();

        }

        // cek jika upload gambar
        if (!$gambar) {
            return false;
        }
    }

    $Gambar = $gambar;
  
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

    $query = "SELECT * FROM tbl_pasien JOIN tbl_dokter ON tbl_pasien.id_dokter = tbl_dokter.id_dokter
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
    

    $admin = query("SELECT * FROM tbl_user WHERE username='$username' AND status=1");
    

    if ($admin) { // cek data
        if ($admin[0]['password'] == $password) {
            $pesan = "Admin berhasil login";
             // set session
        $_SESSION["login"] = true;
            header("Location: dashboard.php?pesan={$pesan}");
            exit;
        } else{
            return [
                'error' => true,
                'pesan' => 'Username / Password Tidak Valid, Silahkan Hubungi Admin!'
            ]; 
        }
    } else {
        return [
            'error' => true,
            'pesan' => 'Username tidak terdaftar'
        ];
    }
}

// jika data dokter berhasil di tambahkan
function flash($status = '', $msg = '')
{
    if (isset($_SESSION[$status])) {
        $msg = $_SESSION[$status];
        unset($_SESSION[$status]);
        return $msg;
    } else {
        $_SESSION[$status] = $msg;
    }
}

function upload() {
    // siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg","jpeg","png","JPG"];

    // cek apakah file bukan gambar
    if (!in_array($filetype, $allowedtype)) {
        echo "<script> 
                alert('Anda tau gambar tidak!');
              </script>";
              return false;
    }

    // cek jika gambar terlalu besar
    if ($filesize > 1000000) {
        echo "<script> 
        alert('Ukuran gambar kamu terlalu besar,kaya cinta ku padamu:))');
      </script>";
      return false;
    }

    //proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, '../../Assets/img/' . $newfilename);

    return $newfilename;
    
}
