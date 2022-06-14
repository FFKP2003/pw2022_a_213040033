<?php 
require '../functions.php';
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
              <th colspan="3" scope="col">Aksi</th>

            </tr>

            <?php  if(empty($tbl_dokter)): ?>
            <tr>
              <td colspan="4"><p style="color: blue; font-style: italic;">Data Dokter Tidak Di Temukan!</p><b>(NOT FOUND)</b></td>
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
                  <td>
                  <a class="btn btn-sm btn-primary" href="ubah_dokter.php?id=<?= $tbl_d['id_dokter'] ?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                  <a class="btn btn-sm btn-danger" href="hapus_dokter.php?id=<?= $tbl_d['id_dokter'] ?>" onclick = "return confirm('yakin ingin menghapus data?');"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
            <?php  } ?>
          </tbody>
        </table>