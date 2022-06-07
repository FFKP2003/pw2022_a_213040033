<?php  
require 'functions.php';

if (!isset($_SESSION['login'])) {
  header("Location: login_admin.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css" />
    <title>SELAMAT DATANG ADMIN</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>RS. MULTIVERSE</b></a>
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" type="Search" name="keyword" autocomplete="off" placeholder="Cari" aria-label="Search"autofocus/>
          <button class="btn btn-outline-dark" type="submit" name="Search">Cari</button>
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
        <div class="row justify-content-center">
          <div class="col-6">
<?php  if(isset($_GET['pesan'])){
                           echo "<script>
                          alert( 'Admin berhasil Login!' );
                          document.location.href = 
                          'dashboard.php';
              
                      </script>";
              }
                         ?>
          </div>
        </div>
        <h3><i class="fa-solid fa-gauge"></i>DASHBOARD</h3>
        <hr class="backgorund-color: grey" />
        <div class="row text-white">
          <div class="card bg-danger pt-4" style="width: 20rem">
            <div class="card-body">
              <a href="./img/pasien.png"><img class="img" src="./img/pasien.png" alt=""/></a>
              <div class="card-body-icon"></div>
           
              <h5 class="card-title">JUMLAH PASIEN</h5>
              <div class="display-4">900</div>
              <a href="daftar_pasien.php"><p class="card-text text-lightblue btn badge btn-light" style="color: lightblue;">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-info pt-4" style="width: 20rem">
            <div class="card-body">
              <a href="./img/dokter.png"><img class="img" src="./img/dokter.png" alt="" /></a>
              <div class="card-body-icon"></div>
              <h5 class="card-title">JUMLAH DOKTER</h5>
              <div class="display-4">500</div>
              <a href="daftar_dokter.php"><p class="card-text text-lightblue btn badge btn-light" style="color: lightblue;">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-warning pt-4" style="width: 20rem">
            <div class="card-body">
              <a href="./img/user.png"><img class="img" src="./img/user.png" alt="" ></a>
              <div class="card-body-icon"></div>
              <h5 class="card-title">JUMLAH PENGGUNA</h5>
              <div class="display-4">2</div>
              <a href="daftar_user.php"><p class="card-text text-lightblue btn badge btn-light" style="color: lightblue;">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>
        <br/>
        <div class="container-fluid text-center">
          <div class="card-header">MANFAAT RUMAH SAKIT</div>
          <div class="card-body">
            <h5 class="card-title">MULTIVERSE</h5>
            <p class="card-text">
              Rumah sakit sebagai salah satu sarana kesehatan yang memberikan pelayanan kesehatan kepada masyarakat.memiliki peran yang sangat strategis dalam mempercepat peningkatan derajat kesehatan masyarkat.Oleh karena itu, rumah sakit
              ini bersedia melayani anda 24 jam.
            </p>
            <a href="https://maps.app.goo.gl/91d9aS6F4Yb9dEty7" class="text-lightblue btn btn-primary" style="color: dark;">LOKASI</a>
          </div>
          <p>Jika kalian yang sedang sakit ingin segera sehat kembali,</p>
          <p>Silahkan hubungi salah satu kontak di bawah ini dengan mengklik tombol <b>MENGIKUTI</b> dibawah ini.</p>
          <div class="card-footer text-muted">Since 26 Oktober 2016</div>
        </div>
        <div class="container mt-4 d-flex">
          <div class="card text-white text-center" style="width: 20rem">
            <div class="card-header bg-danger display-6">
              <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-danger">INSTAGRAM</h5>
              <a href="https://www.instagram.com/hiiqaff?r=nametag" class="btn btn-danger">MENGIKUTI</a>
            </div>
          </div>
          <div class="card text-white text-center" style="width: 20rem">
            <div class="card-header bg-primary display-6">
              <i class="fa-brands fa-facebook"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-primary">FACEBOOK</h5>
              <a href="https://www.facebook.com/faqih.firdaus.560" class="btn btn-primary">MENGIKUTI</a>
            </div>
          </div>
          <div class="card text-white text-center" style="width: 20rem">
            <div class="card-header bg-success display-6">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-success">WHATSAPP</h5>
              <a href="https://wa.me/qr/3RWQUXC4NFE3L1" class="btn btn-success">MENGIKUTI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
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
