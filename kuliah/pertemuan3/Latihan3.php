<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border = "1" cellpadding= "10" cellspacing= "0">   

        <?php  for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif;  ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j";  ?></td>
                <?php endfor; ?>
            </tr>
        <?php  endfor;  ?> 

<!-- Menggunakan php dengan tag tr html -->
 <!-- for( $i = 1; $i <= 3; $i++ ) {
          echo "<tr>";
    for( $j = 1; $j <= 5; $j++ ) {
        echo "<td>$i, $j</td>";
     }
     echo "</tr>";
 } -->
 
 <!-- Menggunakan Html -->
        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <td>3,3</td>
            <td>3,4</td>
            <td>3,5</td>
        </tr> -->
   </table>
</body>
</html>