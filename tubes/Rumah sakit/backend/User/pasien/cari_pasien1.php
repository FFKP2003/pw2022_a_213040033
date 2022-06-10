<?php  
    require '../functions1.php';
    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM tbl_pasien INNER JOIN tbl_dokter ON tbl_pasien.id_dokter = tbl_dokter.id_dokter
              WHERE 
              nama_pasien LIKE '%$keyword%' OR 
              alamat LIKE '%$keyword%' OR 
              jenis_kelamin LIKE '%$keyword%' OR
              no_telepon LIKE '%$keyword%'
              ";

    $tbl_pasien = query($query);
?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id_Pasien</th>
              <th scope="col">Nama_pasien</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis_kelamin</th>
              <th scope="col">No_Telepon</th>
              <th scope="col">Nama_Dokter</th>

            </tr>

            <?php  if(empty($tbl_pasien)): ?>
            <tr>
              <td colspan="4"><p style="color: red; font-style: italic;">Data Pasien Tidak Di Temukan!</p><b>(NOT FOUND)</b></td>
            </tr>
            <?php  endif; ?>
          </thead>
          <tbody>
            
            <?php  foreach ($tbl_pasien as $tbl_p) { ?>
              <tr>
                <td><?php echo  $tbl_p['id_pasien']; ?></td>
                <td><?php echo  $tbl_p['nama_pasien']; ?></td>
                <td><?php echo  $tbl_p['alamat']; ?></td>
                <td><?php echo  $tbl_p['jenis_kelamin']; ?></td>
                <td><?php echo  $tbl_p['no_telepon']; ?></td>
                <td><?php echo  $tbl_p['nama_dokter']; ?></td>
  
              </tr>
            <?php  } ?>
          </tbody>
        </table>