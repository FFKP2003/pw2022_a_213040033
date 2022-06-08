<?php  

require 'functions1.php';

//  jika tidak ada id di url
if (!isset($_GET["id"])) {
    header("Location: daftar_user_pengguna.php");
  }

//   mengambil id di url
if(hapus_user1($_GET['id']) > 0) {
    echo "<script>
            alert( 'data berhasil dihapus!' );
            document.location.href = 
            'daftar_user_pengguna.php';

        </script>";
}
