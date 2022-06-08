<?php  
require 'functions1.php';

//  jika tidak ada id di url
if (!isset($_GET["id"])) {
  header("Location: daftar_user_pengguna.php");
}
// query data pasien berdasarkan id
$Id_User = $_GET["id"];
$tbl_u = query("SELECT * FROM tbl_user WHERE id_user = $Id_User")[0];
if (isset($_POST["ubah_user"])) {

if (ubah_user1($_POST) > 0) {
  echo "<script>
          alert( 'data berhasil diubah!' );
          document.location.href =
          'daftar_user_pengguna.php';
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
    <link rel="stylesheet" href="user.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css" />
    <title>SELAMAT DATANG USER</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SELAMAT DATANG USER | <b>RS. MULTIVERSE</b></a>
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
            <a class="nav-link active text-white pt-4" href="dashboard_pengguna.php"><i class="fa-solid fa-gauge" style="margin-right: 10px"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_user_pengguna.php"><i class="fa-solid fa-users" style="margin-right: 10px"></i>Daftar Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_pasien_pengguna.php"><i class="fa-solid fa-bed" style="margin-right: 10px"></i>Daftar Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_dokter_pengguna.php"><i class="fa-solid fa-user-doctor" style="margin-right: 10px"></i>Daftar Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark pt-4" href="#">Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 pt-5">
        <h3><i class="fa-solid fa-gauge"></i>DAFTAR PENGGUNA</h3>
        <hr class="backgorund-color: grey" />
        <h2>Form Ubah Data Pengguna</h2>
        <a href= "daftar_user_pengguna.php" class="btn badge btn-danger"><i class="fa-solid fa-circle-left"></i> Kembali ke Daftar Pengguna</a>
        <form action="" method="POST" autocomplete="off">

        <input type="hidden" name="id_user" value="<?= $tbl_u['id_user']; ?>">

        <div class="mb-3 col-lg-5">
             <label for="username" class="form-label">Username</label>
             <input type="text"  class="form-control" id="nama" name="username" required  value="<?= $tbl_u['username']; ?>">
        </div>
        <div class="mb-3 col-lg-5">
             <label for="password" class="form-label">Password</label>
             <input type="text"  class="form-control" id="nama" name="password" required  value="<?= $tbl_u['password']; ?>">
        </div>
        <div class="mb-3 col-lg-2">
             <label for="status" class="form-label">Status</label>
        <select  class="form-select" aria-label="Default select example" name="status"value="<?= $tbl_u['status']; ?>">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
        </select>
        </div>
        <div class="mb-3 col-lg-2">
             <label for="role" class="form-label">Role</label>
        <select  class="form-select" aria-label="Default select example" name="role"value="<?= $tbl_u['role']; ?>">
            <option value="Admin">A</option>
            <option value="User">U</option>
        </select>
        </div>

        <button type="submit" class="btn btn-danger" name="ubah_user"><i class="fa-solid fa-pen-to-square"></i> Ubah Data Pengguna</button>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="user.js"></script>
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

