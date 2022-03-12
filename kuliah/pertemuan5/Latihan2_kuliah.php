<?php 
// Array Multidimensi
// Array didalam array

$angka = [[1,2,3],[4,5,6],[7,8,9]];
echo $angka [2][1];
echo "<hr>";
$angka = [[1,2,3],[4,5,6],[7,[8],9]];
echo $angka [2][1][0];

?>