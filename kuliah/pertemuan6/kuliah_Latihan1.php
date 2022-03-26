<?php  
// Array Associative
// Array yang indexnya berupa String yang ber-Associative dengan Nilai nya
$mahasiswa = [
    [
        "nama" => "Faqih firdaus kemal pangestu",
        "npm" => "213040033",
        "email" => "faqihfirdaus188@gmail.com",
        "jurusan" =>"Teknik informatika"
    ],
    [
        "nama" => "Daffa dhiya",
        "npm" => "21304003",
        "email" => "Daffa@gmail.com",
        "jurusan" => "Teknik informatika"
    ],
    [
        "nama" => "Alfarozy",
        "npm" => "21304005",
        "email" => "Alfarozy@gmail.com",
        "jurusan" => "Teknik informatika"
    ],
    [
        "nama" => "Muhammad Ramzy",
        "npm" => "213010047",
        "email" => "Ramzy@gmail.com",
        "jurusan" => "Teknik Industri"
    ]
    
];
// var_dump($mahasiswa[2]["email"]);
// var_dump($mahasiswa[2][2]);

?>
 <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    :  <?php echo $mhs["nama"] ?></li>
        <li>NPM     :  <?php echo $mhs["npm"] ?></li>
        <li>Email   :  <?php echo $mhs["email"] ?></li>
        <li>Jurusan :  <?php echo $mhs["jurusan"] ?></li>
    </ul>
    
 <?php  endforeach; ?> 