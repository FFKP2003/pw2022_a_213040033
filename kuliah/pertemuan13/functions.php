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

    // cek apakah user tidak memilih gambar
    if ($_FILES["gambar"]["error"] === 4) {
        // beri gambar default
        $gambar ='no photo.gif';
    } else {
        // lakukan fungsi upload
        $gambar = upload();

        // cek jika upload gambar
        if (!$gambar) {
            return false;
        }
    }



    //$id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $Email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO
             mahasiswa
             VALUES
             (null, '$npm', '$nama', '$Email', '$jurusan','$gambar')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn =Koneksi();

    // query mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    // cek jika gambar default
    if ($mhs["gambar"] !== 'no photo.gif'); {
        // hapus gambar 
        unlink('image/' . $mhs["gambar"]);
        
    }
    
    
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
        alert('Ukuran gambar terlalu besar,kaya punya dia!');
      </script>";
      return false;
    }

    //proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'image/' . $newfilename);

    return $newfilename;
}

?>