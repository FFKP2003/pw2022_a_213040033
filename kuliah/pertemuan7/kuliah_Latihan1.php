<?php 
// SUPERGLOBALS
// variabel bawaan PHP yang bisa digunakan di manapun
// Bentuknya ada array associative
// $_GET
// $_POST
// $_SERVER

// $_GET = ["nama" => "faqih", "email" => "firdaus@gmail.com"];

// $_GET["nama"] = "Faqih firdaus kemal pangestu";
// $_GET["email"] = "faqih@gmail.com";
// var_dump($_GET);
// var_dump($_SERVER);
// var_dump($_SERVER["SERVER_NAME"]);


?>

<h1>Data Mahasiswa</h1>
<!-- <h1>email kamu sudah terverifikasi, <?= $_GET["email"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_Latihan2.php?nama=faqih&npm=213040033&email=faqihfirdaus188@gmail.com">Faqih firdaus kemal pangestu</a>
    </li>
    <li>
        <a href="kuliah_Latihan2.php?nama=adnan&npm=213040022&email=adnan@gmail.com">adnan</a>
    </li>
    <li>
        <a href="kuliah_Latihan2.php?nama=haris&npm=213040023&email=haris@gmail.com">haris</a>
    </li>
    <li>
        <a href="kuliah_Latihan2.php?nama=daffa&npm=213040024&email=daffa@gmail.com">daffa</a>
    </li>
</ul>