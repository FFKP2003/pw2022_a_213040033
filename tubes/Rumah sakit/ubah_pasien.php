<?php  

require 'functions.php';
// query data pasien berdasarkan id
$Id_Pasien = $_GET["id"];
$tbl_p = query("SELECT * FROM tbl_pasien WHERE id_pasien = $Id_Pasien")[0];
if (isset($_POST["ubah_pasien"])) {

if (ubah_pasien($_POST) > 0) {
  echo "<script>
          alert( 'data berhasil diubah!' );
          document.location.href =
          'daftar_pasien.php';
          </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="admin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css" />
    <title>SELAMAT DATANG ADMIN</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>RS. MULTIVERSE</b></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>

        <div class="icon">
          <h5>
            <span style="margin-right: 10px"><i class="fa-solid fa-envelope" data-toggle="tooltip" title="Surat Masuk"></i></span>
            <span style="margin-right: 10px"><i class="fa-solid fa-bell" data-toggle="tooltip" title="Notifikasi"></i></span>
            <span style="margin-right: 10px"><i class="fa-solid fa-right-from-bracket" data-toggle="tooltip" title="Sign Out"></i></span>
          </h5>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-secondary mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white pt-4" href="dashboard.php"><i class="fa-solid fa-gauge" style="margin-right: 10px"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_user.php"><i class="fa-solid fa-users" style="margin-right: 10px"></i>Daftar user</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_pasien.php"><i class="fa-solid fa-bed" style="margin-right: 10px"></i>Daftar Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_dokter.php"><i class="fa-solid fa-user-doctor" style="margin-right: 10px"></i>Daftar Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark pt-4" href="#">Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 pt-5">
        <h3><i class="fa-solid fa-gauge"></i>DAFTAR PASIEN</h3>
        <hr class="backgorund-color: grey" />
        <a href= "daftar_pasien.php" class="btn badge btn-info">Kembali ke Daftar Pasien</a>
        <form action="" method="POST" autocomplete="off">
        <div class="mb-3 col-lg-5">
             <label for="nama_pasien" class="form-label">Nama Pasien</label>
             <input type="text"  class="form-control" id="nama" name="nama_pasien" required  value="<?= $tbl_p['nama_pasien']; ?>">
        </div>
        <div class="mb-3 col-lg-4">
             <label for="alamat" class="form-label">Alamat</label>
             <textarea type="text" class="form-control" id="alamat" rows="3" name="alamat" required value="<?= $tbl_p['alamat'];  ?>" ></textarea>
        </div>
        <div class="mb-3 col-lg-2">
             <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select  class="form-select" aria-label="Default select example" name="jenis_kelamin"value="<?= $tbl_p['jenis_kelamin']; ?>">
            <option value="L">laki-laki</option>
            <option value="P">perempuan</option>
        </select>
        </div>
        <div class="mb-3 col-lg-5">
             <label for="no_telepon" class="form-label">Nomor Telepon</label>
             <input type="text" class="form-control" name="no_telepon" required value="<?= $tbl_p['no_telepon']; ?>">
        </div>
        <div class="mb-3 col-lg-5">
             <label for="id_dokter" class="form-label">Id Dokter</label>
             <input type="text"  class="form-control" name="id_dokter" value="<?= $tbl_p['id_dokter']; ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="ubah">ubah Data Pasien</button>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
      integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

