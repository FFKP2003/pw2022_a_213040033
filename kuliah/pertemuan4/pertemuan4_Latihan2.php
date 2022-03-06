<?php
// menghitung total 2 kubus
// $a = 9;
// $b = 4;

// $luas_a = $a * $a * $a;
// $luas_b = $b * $b * $b;

// $total = $luas_a + $luas_b;

// echo "total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

// echo "<hr>";

// $c = 10;
// $d = 15;

// $luas_c = $c * $c * $c;
// $luas_d = $d * $d * $d;

// $total = $luas_c + $luas_d;

// echo "total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

// echo "<hr>";
function totalLuasDuaKubus($a, $b) {

    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;
    $luas_a = pow($a, 3);
    $luas_b = pow($b, 3);
    $total = $luas_a + $luas_b;

    // return " total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah ". (pow($a, 3)+ pow($b, 3));
    return " total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}
echo totalLuasDuaKubus(9,4);
echo "<br>";
echo totalLuasDuaKubus(10,15);
echo "<br>";
echo totalLuasDuaKubus(100,200);
echo "<br>";
?>
