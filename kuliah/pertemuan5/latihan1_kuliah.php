<?php  
//ARRAY
//Array adalah variabel yang dapat menampung lebih dari satu nilai sekaligus
// elemen pada array boleh memiliki tipe data yang berbeda
 
// $hari1 = "senin";
// $hari2 = "selasa";

// $bulan1 = "Januari";
// $bulan12 = "Desember";

// $mahasiswa15021345 = "hiiqaff";


//membuat Array
$hari = ["senin","selasa","rabu","kamis","jum'at"]; // cara baru php versi 5
$bulan = array("Januari","Februari","Maret"); // cara lama
 

echo $hari [2];
echo "<br>";
echo $bulan[1];
echo "<hr>";
 // mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0
 // pasangan antara key dan value
 $myArray = [100,"Hiiqaff",true];

 echo $myArray[0];
 echo "<hr>";
 echo $myArray[1];
 echo "<hr>";
// mencetak semua elemen pada Array
// var_dump() atau print_r()
// khusus untuk debugging

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak menggunakan looping
// for

// for($i = 0; $i < 4; $i++) {
//     echo $hari[$i];
//     echo "<br>";

for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

//foreach (khusus untuk array)

foreach($bulan as $b)  { // jamak = array as singular/tunggal = variabel
 echo $b;
 echo "<br>";
 
}
echo "<hr>";

// foreach ($hari as $key => $value) {
//     echo "key: $key, value: $value";
//     echo "<br>";
// }
//     echo "<hr>";

// foreach ($hari as $students => $student) {
//     echo "key: $students, value: $student";
//     echo "<br>";
// }
//     echo "<hr>";

foreach ($hari as $a => $b) {
    echo "key: $a, value: $b";
    echo "<br>";
}
    echo "<hr>";

//memanipulasi isi array 
// menambahkan elemen baru di akhir array

var_dump($hari);
$hari[] = "Sabtu";
$hari[] = "Minggu";
echo"<hr>";
var_dump($hari);
?>