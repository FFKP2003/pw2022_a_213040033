<?php  
require 'functions.php';

if(hapus_pasien($_GET['id']) > 0) {
    echo "<script>
            alert( 'data berhasil dihapus!' );
            document.location.href = 
            'daftar_pasien.php';

        </script>";
}
