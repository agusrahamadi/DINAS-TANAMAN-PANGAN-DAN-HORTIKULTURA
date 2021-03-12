<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dinas Tanaman</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
    <?php
    require_once 'lib/koneksi.php';
    ?>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
				
                    <div class="col-sm-6">
                       <div class="contactinfo">
                            <ul class="nav nav-pills ">
                      
                               <!--/  <li><a href="mainapp.php?unit=bloglist_unit"><i class="fa fa-pencil"></i> Blog Beauty</a></li>
                                <li><a href="https://www.instagram.com/_shopishop/?hl=en"><i class="fa fa-instagram"></i> Instagram</a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=+082358291415"><i class="fa fa-phone"></i> +62 823 5829 1415</a></li>
-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                             <!--    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
								
								<li><a href="#"><i></i>.</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="logo pull-left">
                            <a href="mainapp.php?unit=home_unit"><img  src="gambar/dinas.png" alt="" /></a>
                        </div>

                        <div class="col-sm-8" align="center" style="margin-top: 25px;margin-left: 25px;">
                            <form method="get">
                                <p>
                                    <input type="hidden" name="unit" value="produkpencarian_unit" />
                                    <input name="keyword" type="text" class="form-control" value="" placeholder="Cari Tanaman">

                                </p>
                            </form>
                        </div>
                        <div class="logo pull-right">
                            <a href="mainapp.php?unit=home_unit"><img src="gambar/banjar.png" alt="" /></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
				 <div class="col-sm-2">
                      
                    </div>
					 <div class="col-sm-10">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul  class="nav navbar-nav collapse navbar-collapse" >
                                <li><a href="mainapp.php?unit=home_unit">Beranda</a></li>
                                <li><a href="mainapp.php?unit=biografi_unit">Biografi</a></li>
                                <?php
                                    $n = 0;
                                    $qmenu = mysqli_query($mysqli, "SELECT * FROM t_kategori");
                                    while($gmenu = mysqli_fetch_assoc($qmenu)){
                                        $qsmenu = mysqli_query($mysqli, "SELECT * FROM t_subkat WHERE kd_kat = '".$gmenu['kd_kat']."'");
                                        $gsmenu = mysqli_fetch_assoc($qsmenu);

                                        if($gsmenu['kd_kat'] == $gmenu['kd_kat']){
                                            ?>
                                            <li class="dropdown"><a href="mainapp.php?unit=produkkat_unit&kd_kat=<?php echo $gmenu['kd_kat'] ?>"><?php echo $gmenu['nama_kat'] ?><i class="fa fa-angle-down"></i></a>
                                                <ul role="menu" class="sub-menu">
                                                    <?php
                                                    $qssmenu = mysqli_query($mysqli, "SELECT * FROM t_subkat WHERE kd_kat = '".$gmenu['kd_kat']."' ORDER BY nama_subkat ASC ");
                                                    while($gssmenu = mysqli_fetch_assoc($qssmenu)){
                                                        ?>
                                                        <li><a href="mainapp.php?unit=produksubkat_unit&kd_subkat=<?php echo $gssmenu['kd_subkat'] ?>"><?php echo $gssmenu['nama_subkat'] ?></a></li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <li><a href="<?php echo $gmenu['slugkat'] ?>"><?php echo $gmenu['nama_kat'] ?></a></li>
                                            <?php
                                        }
                                    }
                                ?>
								
                                <li><a href="mainapp.php?unit=bloglist_unit">Informasi</a></li>
                                <li><a href="mainapp.php?unit=kontak_unit">Kontak</a></li>
                                <li><a href="admin/login.php">Masuk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-1">
                       
                    </div>

                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <!--slider-->
    <?php
        require_once('content.php'); 
    ?>
        <!--/slider-->
        <footer id="footer">
            <!--Footer-->
            <div class="footer-top">
             


                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <p class="pull-left"> APLIKASI SISTEM INFORMASI HARGA TANAMAN PANGAN DAN HORTIKULTURA &copy; RIZKY RAHMAN 3101 1502 2779 (2020) </p>
                           <!-- <p class="pull-right">Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a> x <a target="_blank" href="http://www.agusrahmadi.ml">Muhamad Agus Rahmadi</a></p>-->
                         </div>
                    </div>
                </div>
        </footer>
        <!--/Footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
        <script src="js/html5shiv.js"></script>

</body>

</html>