<?php  

require 'functions1.php';

//  jika tidak ada id di url
if (!isset($_GET["id"])) {
    header("Location: daftar_pasien_pengguna.php");
  }

//   mengambil id di url
if(hapus_pasien1($_GET['id']) > 0) {
    echo "<script>
            alert( 'data berhasil dihapus!' );
            document.location.href = 
            'daftar_pasien_pengguna.php';

        </script>";
}
