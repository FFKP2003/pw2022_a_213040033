<?php
require 'functions.php';
// ketika tombol registrasi ditekan

if (isset($_POST['registrasi'])) {
    registrasi($_POST);
}
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css" />
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <style type="text/css">

            </style>
            <title>Registrasi</title>
        </head>
        <body>
            <div align="center">
                <br>
     <h2 style="color: black; font-style:italic;"data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="100"
     data-aos-offset="0">Pendaftaran</h2>

                <div align="center" style="width:320px;margin-top:150px;">
                    <form name="registrasi.php" method="post" class="well well-lg" action="registrasi.php" style="box-shadow: 0px 0px 20px #888888;">
                        <i class="glyphicon glyphicon-user fa-3x" style="background-color: green;padding: 20px 20px 20px 20px;border-radius: 50%;box-shadow: #ffffff -1px 2px 1px;"></i>
                        <br>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="username" id="username" class="form-control" type="text" placeholder="Username" autocomplete="off" autofocus required/>
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input name="password1" id="password" class="form-control" type="password" placeholder="Password" required/>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input name="password2" id="password" class="form-control" type="password" placeholder="Konfirmasi Password" required/>
                        </div>
                        <br>
                        <input name="registrasi.php" type="submit" value="Daftar" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
        </body>
    </html>
    <?php

?>


