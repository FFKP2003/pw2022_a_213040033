<?php 
// Array Multidimensi
// Array didalam array
// pengulangan pada array
// for / foreach

$angka = [[1,2,3],[4,5,6],[7,8,9]];
echo $angka [2][1];
echo "<hr>";
$angka = [[1,2,3],[4,5,6],[7,[8],9]];
echo $angka [2][1][0];
echo "<hr>";

$angka = [3,2,15,20,11,77,89,8,100];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
           width: 50px;
           height: 50px;
           background-color: greenyellow;
           text-align: center; 
           line-height: 50px;
           margin: 3px;
           float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"> <?= $angka[$i]; ?></div>
    <?php } ?>
    <div class="clear"></div>

     <?php foreach( $angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
     <?php } ?>
     
     <div class="clear"></div>

     <?php foreach( $angka as $a) : ?>
        <div class="kotak"><?php echo $a; ?></div>
     <?php endforeach; ?>
</body>
</html>
