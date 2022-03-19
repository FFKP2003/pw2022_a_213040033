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
            <h1>Daftar mahasiswa</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <?php $nomor =1; foreach($mahasiswa as $mhs) : ?>
    <tr class="align-middle">
        <th scope="row"><?= $nomor++; ?></th>
        <td>
     <img class="img-table rounded-circle"  src="img/<?php echo $mhs["gambar"]; ?>" width="50" >
        </td>
         <td><?php echo $mhs['nama'] ?></td>
         <td><?php echo $mhs['npm'] ?></td>
         <td><?php echo $mhs['email'] ?></td>
         <td><?php echo $mhs['jurusan'] ?></td>
         <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
        </td>
    </tr>
    <?php  endforeach; ?> 
   </tbody>
  </table>
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

