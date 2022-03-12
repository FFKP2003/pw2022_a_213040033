<?php  
//ARRAY
//Array adalah variabel yang dapat menampung lebih dari satu nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa15021345 = "Faqih";


//membuat Array
$hari = ["senin","selasa","rabu","kamis","jum'at"]; // cara baru php versi 5
$bulan = array("Januari","Februari","Maret");
 // cara lama
 // mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0
 $myArray = [100,"Hiiqaff",true];

echo $hari [2];
echo "<br>";
echo $bulan[1];
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
foreach($bulan as $b)  { // jamak = array as tunggal = variabel
 echo $b;
 echo "<br>";

}

foreach ($hari as $a => $b) {
    echo "Key : $a, Value: $b";
    echo "<br>";
}
echo "<hr>";

//memanipulasi isi array 
// menambah elemen baru di akhir array
 
$hari 
?>