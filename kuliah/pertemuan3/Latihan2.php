<?php 
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array (tidak di bahas)

for( $i = 0; $i < 5; $i++) {
    echo "HELLO WORLD! <br>";
}
$i = 0;
while( $i < 5 ) {
    echo "HELLO WORLD!  <br>";
$i++; 
}
// Jika bernilai false sintaks tidak akan memiliki hasil atau kosong(WHILE)
$i = 10;
while( $i < 5 ) {
    echo "HELLO WORLD!  <br>";
$i++; 
}
$i = 0;
do {
    echo "HELLO WORLD!  <br>";
$i++;
} while( $i < 5 );
// Jika bernilai false sintaks akan di jalankan satu kali atau di tambah satu(do.. while)
$i = 10;
do {
    echo "HELLO WORLD!  <br>";
$i++;
} while( $i < 5 );


?>

<?php 
// pengkondisian / percabangan
// if else
// if else if else
// ternary
// switch

$x = 10;
if( $x < 20) {
    echo "benar";
}

echo "<br>";
$x = 20;
if( $x < 20) {
    echo "benar";
}

echo "<br>";
$x = 10;
if( $x < 20) {
    echo "benar ";
} 
echo "salah";

echo "<br>";
$x = 10;
if( $x < 20) {
    echo "benar ";
} else {
    echo "salah";
}

echo "<br>";
$x = 30;
if( $x < 20) {
    echo "benar ";
} else {
    echo "salah";
}
echo "<br>";
$x = 30;
if( $x < 20) {
    echo "benar ";
} elseif( $x == 20 ) {
    echo "bingo!";
}
else {
    echo "salah";
}
echo "<br>";
$x = 20;
if( $x < 20) {
    echo "benar ";
} elseif( $x == 20 ) {
    echo "bingo!";
}
else {
    echo "salah";
}
echo "<br>";
$x = 5;
if( $x < 20) {
    echo "benar ";
} elseif( $x == 20 ) {
    echo "bingo!";
}
else {
    echo "salah";
}
echo "<h3>Ternary</h3>";
$bilangan = 20;
$hasil = ($bilangan % 2) == 0 ? "Bilangan bulat" : "Bilangan Ganjil";

echo "$bilangan <br>";
echo $hasil;

echo "<h2> switch </h2>";
$nama = 'kemeja';
echo "you buy " . $nama;
echo "<br>";
switch($nama) {
    case 'kemeja':
        echo "ini sangat bagus!";
        break;
    case 'chino' :
        echo "ini lumayan bagus!";
        break;
    case 'jeans' :
        echo "ini bagus!";
        break;
    case 'hoodie' :
        echo "ini kurang bagus";
        break;
    default :
        echo "nama yang anda masukkan salah!";
        break;
        
}


?>