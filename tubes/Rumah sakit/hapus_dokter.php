<?php  
require 'functions.php';

//  jika tidak ada id di url
if (!isset($_GET["id"])) {
    header("Location: daftar_dokter.php");
  }

//   mengambil id di url
if(hapus_dokter($_GET['id']) > 0) {
    echo "<script>
            alert( 'data berhasil dihapus!' );
            document.location.href = 
            'daftar_dokter.php';

        </script>";
}
