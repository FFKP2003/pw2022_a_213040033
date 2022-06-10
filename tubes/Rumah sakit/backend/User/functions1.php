<?php
session_start();
function connection() { 
    $conn = mysqli_connect('localhost', 'root', '', 'rumah_sakit') or die('connection GAGAL!');
    
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

function tambah_data_pasien1($data) {
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

function tambah_data_dokter1($data) {
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


function hapus_pasien1($Id_Pasien) {
    $conn = connection();
    mysqli_query ($conn, "DELETE FROM tbl_pasien WHERE id_pasien = $Id_Pasien") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_dokter1($Id_Dokter) {
    $conn = connection();

    // query dokter berdasarkan id
    $tbl_d = query("SELECT * FROM tbl_dokter WHERE id_dokter = $Id_Dokter") [0];
    // cek jika gambar default
    if ($tbl_d["gambar"] !== 'no photo.png'); {
        // hapus gambar
        unlink('img/' . $tbl_d["gambar"]);
    }
    mysqli_query ($conn, "DELETE FROM tbl_dokter WHERE id_dokter = $Id_Dokter") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
function hapus_user1($Id_User) {
    $conn = connection();
    mysqli_query ($conn, "DELETE FROM tbl_user WHERE id_user = $Id_User") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah_pasien1($data) {
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

function ubah_dokter1($data) {
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
            unlink("img/".$dokter['gambar']);
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

function ubah_user1($data) {
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

function Cari_Pasien($keyword) {
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

function Cari_Dokter($keyword) {
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
function Cari_User($keyword) {
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

function login_user($data) {
    $conn = connection();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $user = query("SELECT * FROM tbl_user WHERE username = '$username'");
    
    // cek password
    // set session
    
    if ($user) { // cek data
    
        if (password_verify($password, $user[0]['password'])) {
            
            
            $pesan = "User berhasil login";
            // set session
        $_SESSION["login_pengguna"] = true;
            header("Location: dashboard_pengguna.php?pesan={$pesan}");
            exit;
        }else {
            return [
                'error' => true,
                'pesan' => 'password salah'
            ];
        }
    } else {
        return [
            'error' => true,
            'pesan' => 'Username / password tidak terdaftar, silahkan registrasi terlebih dahulu'
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
    $allowedtype = ["jpg","jpeg","png"];

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
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;
}
function registrasi($data) {
    $conn = connection();
    
    $username = htmlspecialchars(strtolower($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //jika username / password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
              alert('username / password tidak boleh kosong!');
              document.location.href = 'registrasi.php';
              </script>";

              return false;
    }
    
   $query = query("SELECT * FROM tbl_user WHERE username = '$username'");
 
    // jika username sudah terdaftar
    if ($query) {
        echo "<script>
              alert('username ini sudah terdaftar!');
              document.location.href = 'registrasi.php';
              </script>";

        return false;
    }
    // jika konfirmasi password tidak sesuai

    if ($password1 !== $password2) {
        echo "<script>
              alert('Konfirmasi password tidak sesuai!');
              document.location.href = 'registrasi.php';
              </script>";

        return false;
    }
    // jika password < 5 digit

    if (strlen($password1 < 5)) {
        echo "<script>
              alert('password terlalu pendek!');
              document.location.href = 'registrasi.php';
              </script>";
        
        return false;           
    }
    // jika username dan passwordnya sudah sesuai
    // enkripsi password 

    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
   
    $query = "INSERT INTO
                tbl_user
                VALUES
                (null,'$username','$password_baru',1,'User')
                ";
                
    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    

} 
