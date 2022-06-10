<?php 
require '../functions1.php';
$keyword = $_GET["keyword"];

$query =  "SELECT * FROM tbl_dokter 
            WHERE
        nama_dokter LIKE '%$keyword%' OR
        spesialis LIKE '%$keyword%' 
    ";
$tbl_dokter = query($query);
?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id_Dokter</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama_Dokter</th>
              <th scope="col">Spesialis</th>
              <th scope="col">Jadwal_Praktik</th>

            </tr>

            <?php  if(empty($tbl_dokter)): ?>
            <tr>
              <td colspan="4"><p style="color: red; font-style: italic;">Data Dokter Tidak Di Temukan!</p><b>(NOT FOUND)</b></td>
            </tr>
            <?php  endif; ?>
          </thead>
          <tbody>
            <?php  foreach ($tbl_dokter as $tbl_d) { ?>
              <tr class="align-middle">      
                <td><?php echo  $tbl_d['id_dokter']; ?></td>
                <td><img class="img-dokter rounded-circle" src="../../Assets/img/<?= $tbl_d["gambar"]; ?>"></td>
                <td><?php echo  $tbl_d['nama_dokter']; ?></td>
                <td><?php echo  $tbl_d['spesialis']; ?></td>
                <td><?php echo  $tbl_d['jadwal_praktik']; ?></td>
                
              </tr>
            <?php  } ?>
          </tbody>
        </table>