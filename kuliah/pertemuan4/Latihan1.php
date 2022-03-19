<?php
// FUNCTION

// Built-in Function
/* date(); 
untuk menampilkan tanggal dengan format tertentu*/
echo date("l, j F Y");
echo "<hr>";
echo date("l, d-M-Y ");
echo "<hr>";

 
// time();
echo time();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
// echo time();
echo "<br>";
// echo date("l", time()+ 172800); 
// echo "<br>";

// echo date("l", time()+ 259200); 
// echo "<br>";

// echo date("l", time()+ 60 * 60 * 24 * 100); 
// echo "<br>";
echo date("d M Y", time()- 60 * 60 * 24 * 100); 
echo "<br>";
// echo time() + 86400;
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() + 60 * 60 * 24 * 100);
echo "<hr>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime();
// mktime(0,0,0,0,0,0);
// mendapatkan detik pada tanggal tertentu
// jam, menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo mktime(0,0,0,2,12,2003);
echo "<hr>";
echo date("l", mktime(0,0,0,2,12,2003));
echo "<hr>";

// strtotime();
echo date("l", strtotime("12 feb 2003"));

// MATH
echo pow(3,4);
echo "<br>";
echo rand(1,100);
echo "<br>";
// pembulatan
// round(), cell(), floor();
echo round(2.6);  //pembulatan terdekat
echo "<br>";
echo ceil(9.1); //ke atas(ceiling atau langit-langit)
echo "<br>";
echo floor(2.9); //kebawah (lantai)
echo "<hr>";


?>