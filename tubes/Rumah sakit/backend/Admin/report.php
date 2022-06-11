<?php
    include('functions.php');
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $query = query("SELECT * FROM tbl_pasien");
    $html = '<center><h3>Data Pasien Rumah Sakit</h3></center><hr/><br/>';
    // var_dump($query);
    $html .= '<table border="1" width="100%">
    <tr>
  
              <th scope="col">Nama_pasien</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis_kelamin</th>
              <th scope="col">No_Telepon</th>
              <th scope="col">Id_Dokter</th>

            </tr>';
    foreach ($query as $row) :
    $html .= "<tr>
     
        <td>".$row['nama_pasien']."</td>
        <td>".$row['alamat']."</td>
        <td>".$row['jenis_kelamin']."</td>
        <td>".$row['no_telepon']."</td>
       
    </tr>";
    $no++;
    endforeach;
    $html .= "</html>";
    $tes = $dompdf->loadHtml($html);
    // var_dump($tes);
    // Setting ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'potrait');
    // Rendering dari HTML Ke PDF
    $dompdf->render();
    // Melakukan output file Pdf
    $dompdf->stream('data_pasien.pdf');
?>