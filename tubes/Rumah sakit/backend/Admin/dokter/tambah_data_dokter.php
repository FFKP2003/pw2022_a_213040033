<?php  

require '../functions.php';
// mengklik tombol tambah()
if (!isset($_SESSION['login'])) {
  header("Location: ../login_admin.php");
}
if (isset($_POST["tambah"])) {

if (tambah_data_dokter($_POST) > 0) {
  flash('success', "Berhasil menambah data dokter");
  header("Location: daftar_dokter.php");
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
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>RS. MULTIVERSE</b></a>

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
            <a class="nav-link active text-white pt-4" href="../dashboard.php"><i class="fa-solid fa-gauge" style="margin-right: 10px"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="../user/daftar_user.php"><i class="fa-solid fa-users" style="margin-right: 10px"></i>Daftar Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="../pasien/daftar_pasien.php"><i class="fa-solid fa-bed" style="margin-right: 10px"></i>Daftar Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white pt-4" href="../dokter/daftar_dokter.php"><i class="fa-solid fa-user-doctor" style="margin-right: 10px"></i>Daftar Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark pt-4" href="#">Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 pt-5">
        <h3><i class="fa-solid fa-gauge"></i>DAFTAR DOKTER</h3>
        <hr class="backgorund-color: grey" />
        <h2>Form Tambah Data Dokter</h2>
        <a href= "daftar_dokter.php" class="btn badge btn-primary"><i class="fa-solid fa-circle-left"></i> Kembali ke Daftar Dokter</a>
        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="mb-3 col-lg-3">
             <label for="nama_dokter" class="form-label">Nama Dokter</label>
             <input type="text"  class="form-control" id="nama" name="nama_dokter" required>
        </div>
        <div class="mb-3 col-lg-3">
        <label for="spesialis" class="form-label">Spesialis</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="spesialis">
             <option value="Umum">Senin - Kamis | 08.00 - 15.00</option>
             <option value="Gigi">Senin - jum'at  | 09.00 - 18.00</option>
             <option value="Anak">Selasa - jum'at | 08.30 - 17.00</option>
             <option value="Kandungan">senin - jum'at | 07.30 - 19.00</option>
             <option value="THT">senin - kamis | 10.00 - 19.00</option>
             <option value="Syaraf">Senin - Kamis | 08.15 - 16.00</option>
             <option value="Kulit dan Kelamin">Selasa - jum'at | 07.00 - 14.00</option>
        </select>
        </div>
        <br>
        <div>
        <div class="mb-3 col-lg-2">
        <label for="jadwal_praktik" class="form-label">Jadwal_Praktik</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jadwal_praktik">
             <option value="Senin - Kamis | 08.00 - 15.00">Umum</option>
             <option value="Senin - jum'at  | 09.00 - 18.00">Gigi</option>
             <option value="Selasa - jum'at | 08.30 - 17.00">Anak</option>
             <option value="senin - jum'at | 07.30 - 19.00">Kandungan</option>
             <option value="senin - kamis | 10.00 - 19.00">THT</option>
             <option value="Senin - Kamis | 08.15 - 16.00">Syaraf</option>
             <option value="Selasa - jum'at | 07.00 - 14.00">Kulit dan Kelamin</option>
        </select>
        </div>
        </div>
        <div class="mb-3 col-lg-5">
             <label for="gambar" class="form-label">Gambar</label>
             <input type="file" class="form-control" id="gambar" name="gambar" required >
        </div>

        <button type="submit" class="text-white btn btn-primary" name="tambah"><i class="fa-solid fa-plus"></i> Tambah Data Dokter</button>
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

