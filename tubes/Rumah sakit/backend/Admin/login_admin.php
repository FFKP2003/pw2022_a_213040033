<?php
require './functions.php';
// ketika tombol login ditekan

if (isset($_POST['login'])) {
    $login_admin = login_admin($_POST);

    
}

    ?>
     <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script type="text/javascript" src="../Assets/js/jquery.js"></script>
            <script type="text/javascript" src="../Assets/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../Assets/fontawesome-free-6.1.1-web/css/all.min.css" />          
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <style type="text/css">
                body{
                    background-image: url(../Assets/img/login_admin.jpg);
                }

            </style>
            <title>Login Sistem Informasi Rumah Sakit</title>
        </head>
        <body>
            <div align="center">
                <br>
                <h1 data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"><label class="label label-primary">Sistem Informasi Rumah Sakit</label></h1>
     <h2 style="color: white;"data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="1500"
     data-aos-offset="0">Login Admin</h2>
                <div align="center" style="width:320px;margin-top:5%;">
                    <form name="login_form" method="post" class="well well-lg" action="login_admin.php" style="box-shadow: 0px 0px 20px #888888;">
                        <i class="fa-solid fa-hospital fa-3x" style="background-color: lightblue;padding: 25px 20px 25px 20px;border-radius: 50%;box-shadow: #888888 -1px 2px 5px;"></i>
                        <br>
                        <br>
                        <?php 
                        if(isset($login_admin) && $login_admin['error'] ){
                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
     '. $login_admin["pesan"].'
    </div>';
                        }
                                ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="username" id="username" class="form-control" type="text" placeholder="Username" autocomplete="off" autofocus required/>
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input name="password" id="password" class="form-control" type="password" placeholder="Password" required />
                        </div>
                        <br />
                        <input name="login" type="submit" value="Login" class="btn btn-info btn-block">
                    </form>

                </div>
            </div>
            <br>
            <br>
            <br>

            <footer align="center">
                <center><b style="color:#ffffff">Created by</b> <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=rumah_sakit&table=tbl_user&pos=0">Faqih firdaus kemal pangestu</a></center>
            </footer>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
        </body>
    </html>
    <?php

?>


