<?php
require 'functions.php';
// ketika tombol login ditekan

if (isset($_POST['login_user'])) {
    login_user($_POST);
}
    ?>
    <html>
        <head>
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <style type="text/css">
                body{
                    background-image: url(img/login_user.jpg);
                    
                }

            </style>
            <title>Login Sistem Informasi Rumah Sakit</title>
        </head>
        <body>
            <div align="center">
                <br>
                <h1 data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"><label class="label label-danger">Sistem Informasi Rumah Sakit</label></h1>
     <h2 style="color: #ffffff;"data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="1500"
     data-aos-offset="0">Login Pengguna</h2>
                

                <div align="center" style="width:320px;margin-top:5%;">
                    <form name="login_form" method="post" class="well well-lg" action="login_user.php" style="-webkit-box-shadow: 0px 0px 20px #888888;">
                        <i class="fa fa-hospital-o fa-5x fa-inverse" style="background-color: red;padding: 20px 28px 20px 28px;border-radius: 50%;box-shadow: #ffffff -1px 2px 1px;"></i>
                        <br>
                        <br>
                        <?php 
                        if(isset($_GET['error'])){
                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
      Password atau username kurang tepat
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
                            <input name="password" id="password" class="form-control" type="password" placeholder="Password" required/>
                        </div>
                        <br />
                        <input name="login_user" type="submit" value="Login" class="btn btn-danger btn-block">
                    </form>

                </div>
            </div>
            <br>
            <br>
            <br>

            <footer align="center">
                <center><b style="color:#ffffff">Created by</b> <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=rumah_sakit&table=tbl_user&pos=0" style="color: red;">Faqih firdaus kemal pangestu</a></center>
            </footer>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
        </body>
    </html>
    <?php

?>


