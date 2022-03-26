<?php 

$mahasiswa = [
    [
        "nama" => "Faqih firdaus kemal pangestu",
        "npm" => "213040033",
        "email" => "faqihfirdaus188@gmail.com",
        "jurusan" =>"Teknik informatika", 
        "gambar" => "Me.jpeg"
    ],
    [
        "nama" => "Daffa dhiya",
        "npm" => "21304003",
        "email" => "Daffa@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "Daffa.jpg"
    ],
    [
        "nama" => "Alfarozy",
        "npm" => "21304005",
        "email" => "Alfarozy@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "Alfarozy.webp"
    ],
    [
        "nama" => "Muhammad Ramzy",
        "npm" => "213010047",
        "email" => "Ramzy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "Ramzy.jpg"
    ],
    [
        "nama" => "Riyan",
        "npm" => "213040035",
        "email" => "Riyan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "no photo.gif"
    ],
    [
        "nama" => "Revina",
        "npm" => "213010014",
        "email" => "Revina@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "no photo.gif"
    ],
    [
        "nama" => "ainan",
        "npm" => "213010016",
        "email" => "ainan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "no photo.gif"
    ],
    [
        "nama" => "mr.iip",
        "npm" => "213010023",
        "email" => "mr.iip@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "no photo.gif"
    ],
    [
        "nama" => "diva",
        "npm" => "213010021",
        "email" => "diva@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "no photo.gif"
    ],
    [
        "nama" => "Gilman",
        "npm" => "213010020",
        "email" => "Gilman@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "no photo.gif"
        ]
];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar $mahasiswa</title>
    <style>
      .img-table {
        width: 50px;
        height: 50px;
        object-fit: cover;
       
      }
    </style>
  </head>
  <body>
        <div class="container">
            <h1>Detail Mahasiswa</h1>
            <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text"><?= $_GET["jurusan"];  ?></p>
        <a href="kuliah_Latihan3.php">Kembali</a>
      </div>
    </div>
  </div>
</div>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>