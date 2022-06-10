<?php  

session_start();

if (isset($_SESSION['login'])) {
    header("Location: ./Admin/dashboard.php");
}
if (isset($_SESSION['login_pengguna'])) {
    header("Location: ./User/dashboard_pengguna.php");
}

return '404';
?>