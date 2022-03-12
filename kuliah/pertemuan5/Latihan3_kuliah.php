<?php  
// studi kasus
$mahasiswa = [
    ["Faqih firdaus kemal pangestu","213040033","faqihfirdaus188@gmail.com","Teknik informatika"],
    ["Daffa dhiya","21304003","Daffa@gmail.com","Teknik informatika"],
    ["Alfarozy","21304005","Alfarozy@gmail.com","Teknik informatika"],
    ["Muhammad Ramzy","213010047","Ramzy@gmail.com","Teknik Industri"]
];
var_dump($mahasiswa)
// tidak menggunakan var_dump

// $mahasiswa = ["Faqih firdaus kemal pangestu","213040033","faqihfirdaus188@gmail.com","Teknik informatika"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- menggunakan var_dump bisa dan tidak menggunakan var_dump pun bisa $mahasiswa -->
    <ul>
        <li>Faqih firdaus kemal pangestu</li>
        <li>213040033</li>
        <li>Teknik informatika</li>
        <li>faqih.213040033@mail.unpas.ac.id</li>
    </ul>

    <!-- tidak pakai var_dump / array untuk $mahasiswa -->

    <!-- <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
            <?php endforeach; ?>
    </ul> -->

     <!-- tidak pakai var_dump / array untuk $mahasiswa -->

    <!-- <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul>    -->

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    :  <?php echo $mhs[0] ?></li>
        <li>NPM     :  <?php echo $mhs[1] ?></li>
        <li>Email   :  <?php echo $mhs[2] ?></li>
        <li>Jurusan :  <?php echo $mhs[3] ?></li>
    </ul>
    <?php  endforeach; ?>
    
    
</body>
</html>

