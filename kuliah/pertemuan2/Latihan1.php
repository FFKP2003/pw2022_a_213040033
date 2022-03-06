<?php
// Pertemuan 2 - PHP DASAR
// Sintaks PHP
// Standar Output
// echo,print
// print_r
// var_dump
echo 10;
echo "<br>";
print "Faqih firdaus";
print "<br>";
print_r("kemal pangestu");
print_r("<br>");
var_dump("faqih firdaus kemal pangestu");
var_dump("<br>");
echo "Jum'at";
echo "<br>";
// VARIABEL & TYPE DATA
// wadah untuk menyimpan NILAI
// nama nya bebas, tidak boleh diawali dengan angka tapi boleh mengandung angka
// tidak boleh ada spasi
$nama = "I'M Faqih firdaus kemal pangestu";
echo $nama;
echo "<br>";
// bisa ditimpa / overwrite
$lokasi = 'Serang';
echo $lokasi;
echo "<br>";
// OPERATOR
// aritmatika
// +,-,*,/
echo (1 + 2) * 4 - 2; //kabataku
echo "<br>";
$x = 5;
$y = 15;
echo $x * $y;
echo "<br>";
$x = 5;
$y = 15;
echo $x + $y;
echo "<br>";

// String
// escaped character
// \
echo 'hiiqaff : "jum\'at"';
echo "<br>";
echo "hiiqaff : \"jum'at\"";
echo "<br>";
// interpolasi
// mencetak isi variabel
// hanya bisa digunakan oleh ""
echo "Hallo nama saya $nama";
echo "<br>";
echo 'Hallo nama saya $nama';
// concat / concatenation
// penggabungan String
// .
echo "<br>";
$nama_depan ='Hiiqaff';
$nama_belakang = 'Qaffhii';
echo $nama_depan . " " . $nama_belakang;
echo "<br>";
// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 2;
$x += 8;
echo $x;
echo "<br>";
$x = 2;
$x -= 8;
echo $x;
echo "<br>";
$x = 2;
$x *= 8;
echo $x;
echo "<br>";
$x = 2;
$x /= 8;
echo $x;
echo "<br>";
$x = 2;
$x %= 8;
echo $x;
echo "<br>";
$x = 2;
$x .= 8;
echo $x;
echo "<br>";
$nama = "Faqih";
$nama .= " ";
$nama .= "Firdaus";
echo $nama;
echo "<br>";
// Perbandingan
// <, >, <=, >=, ==, !=
echo 5 < 10;
echo "<br>";
var_dump(5 < 10);
echo "<br>";
var_dump(2 > 6);
echo "<br>";
var_dump(3 == 2);
echo "<br>";
var_dump(3 == "3");
echo "<br>";
// identitas / strict comparison
//  ===, !===
echo 10 === "10";
var_dump(5 === "5");
echo "<br>";
// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
echo "<br>";
// increment /Decrement
// penambahan / pengurangan 1
//  ++,--
$x = 20;
echo ++$x;
echo "<br>";
echo $x++;

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar  php</title>
    
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Faqih Firdaus Kemal Pangestu"; ?></h1>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah nama saya" ?></p>
    <?php echo "<h1>Halo, Selamat datang semuanya</h1>"?>

</body>
</html>