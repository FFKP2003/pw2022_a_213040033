<?php  
//studi kasus
$mahasiswa = [
    ["Faqih firdaus kemal pangestu","213040033","faqihfirdaus188@gmail.com","Teknik informatika"],
    ["Daffa dhiya","21304003","Daffa@gmail.com","Teknik informatika"],
    ["Alfarozy","21304005","Alfarozy@gmail.com","Teknik informatika"]
];
var_dump($mahasiswa)
?>

<?php foreach($mahasiswa as $mhs) { ?>}
<ul>
<li>Nama : <?php echo $mhs[0] ?></li>
<li>NPM :  <?php echo $mhs[1] ?></li>
<li>Email:  <?php echo $mhs[2] ?></li>
<li>Jurusan:  <?php echo $mhs[3] ?></li>
</ul>
<?php } ?>

