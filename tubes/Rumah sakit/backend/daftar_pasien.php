<?php  
require 'functions.php';
$tbl_pasien = query("SELECT * FROM tbl_pasien");

if (!isset($_SESSION['login'])) {
  header("Location: login_admin.php");
}
// ketika tombol search di klik
if (isset($_POST['keyword'])) {
  $tbl_pasien = Search($_POST["keyword"]);
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
        <form class="d-flex" action="" method="POST" autocomplete="off">
          <input class="form-control me-2" type="Search" name="keyword" placeholder="Cari" aria-label="Search" autofocus/>
          <button class="btn btn-outline-dark" type="submit" >Cari</button>
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
            <a class="nav-link text-white pt-4" href="daftar_user.php"><i class="fa-solid fa-users" style="margin-right: 10px"></i>Daftar Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_pasien.php"><i class="fa-solid fa-bed" style="margin-right: 10px"></i>Daftar Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="daftar_dokter.php"><i class="fa-solid fa-user-doctor" style="margin-right: 10px"></i>Daftar Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark pt-4" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 pt-5">
        <h3><i class="fa-solid fa-bed"></i>DAFTAR PASIEN</h3>
        <hr class="backgorund-color: grey" />
        <a href= "tambah_data_pasien.php" class="btn badge btn-primary">Tambah Data Pasien</a>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id_Pasien</th>
              <th scope="col">Nama_pasien</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis_kelamin</th>
              <th scope="col">No_Telepon</th>
              <th scope="col">Id_Dokter</th>
              <th colspan="3" scope="col">Aksi</th>

            </tr>

            <?php  if(empty($tbl_pasien)): ?>
            <tr>
              <td colspan="4"><p style="color: blue; font-style: italic;">Data Pasien Tidak Di Temukan!</p><b>(NOT FOUND)</b></td>
            </tr>
            <?php  endif; ?>
          </thead>
          <tbody>
            
            <?php  foreach ($tbl_pasien as $tbl_p) { ?>
              <tr>
                <td><?php echo  $tbl_p['id_pasien']; ?></td>
                <td><?php echo  $tbl_p['nama_pasien']; ?></td>
                <td><?php echo  $tbl_p['alamat']; ?></td>
                <td><?php echo  $tbl_p['jenis_kelamin']; ?></td>
                <td><?php echo  $tbl_p['no_telepon']; ?></td>
                <td><?php echo  $tbl_p['id_dokter']; ?></td>
  
                <td>
                  <a href="ubah_pasien.php?id=<?= $tbl_p['id_pasien'] ?>" class="btn badge btn-primary">ubah</a>
                  <a href="hapus_pasien.php?id=<?= $tbl_p['id_pasien'] ?>"class="btn badge btn-danger" onclick = "return confirm('yakin ingin menghapus data?');">hapus</a>
                </td>
              </tr>
            <?php  } ?>
          </tbody>
        </table>
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
