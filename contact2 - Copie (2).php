<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Burger</title>
    <meta name="description_plat" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img2/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/owl.carousel.min.css">
    <link rel="stylesheet" href="css2/magnific-popup.css">
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <link rel="stylesheet" href="css2/themify-icons.css">
    <link rel="stylesheet" href="css2/nice-select.css">
    <link rel="stylesheet" href="css2/flaticon.css">
    <link rel="stylesheet" href="css2/animate.css">
    <link rel="stylesheet" href="css2/slicknav.css">
    <link rel="stylesheet" href="css2/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.html">home</a></li>
                                        <li><a href="Menu.html">Menu</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="active" href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img2/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="#">+10 367 453 7382</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>MARKETING</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <html>
     <form method="POST" action="">
     Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!">
     </form>
     </html>

     <?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'marketing';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT num_plat,prix_plat FROM promotion
      WHERE num_plat LIKE '%$recherche%'
          OR prix_plat LIKE '%$recherche%'

      LIMIT 10");
      echo "<tr><td><br>";
           echo 'num_plat  , prix_plat <br/>';
      echo "</div></td></tr>";
     // affichage du résultat
      while( $r = mysqli_fetch_array($q)){
        echo 'Résultat de la recherche: '.$r['num_plat'].',  '.$r['prix_plat'].'<br />'
       ;
     }
    ?>




    <HTML>
  <body>
    <form action="../core/triepromotion.php" method="POST">
        <input type="submit" name="" value="tri promotion">
    <?PHP
    if(isset($_GET['tri']) and $_GET['tri']=='1')
    {
      include "../core/promotionC.php";
      $promotion1C=new promotionC();
      $listepromotions=$promotion1C->tripromotions();
    }
    else
    {

      include "../core/promotionC.php";
      $promotion1C=new promotionC();
      $listepromotions=$promotion1C->afficherpromotions();
    }
    ?>
   <div class="col-md-6">
   <div class="panel panel-default">
   <div class="panel-heading">
   afficher promotion
   </div>
   <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
   <thead>
       <tr>
           <th>num_plat</th>

           <th>prix_plat</th>

       </tr>
   </thead>
   <?PHP
   foreach($listepromotions as $row){
   ?>
   <tbody>

       <tr>
           <td><?PHP echo $row['num_plat']; ?></td>

           <td><?PHP echo $row['prix_plat']; ?></td>
  

       </tr>

   </tbody>
   <?PHP
   }
   ?>
   </table>
   </div>
   </div>

  </body>
  </HTMl>




    <!-- ================ contact section end ================= -->

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h3 class="footer_title pos_margin">
                                    New York
                            </h3>
                            <p>5th flora, 700/D kings road, <br>
                                    green lane New York-1782 <br>
                                    <a href="#">info@burger.com</a></p>
                            <a class="number" href="#">+10 378 483 6782</a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h3 class="footer_title pos_margin">
                                California
                            </h3>
                            <p>5th flora, 700/D kings road, <br>
                                    green lane New York-1782 <br>
                                    <a href="#">info@burger.com</a></p>
                            <a class="number" href="#">+10 378 483 6782</a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Stay Connected
                                    </h3>
                                    <form action="#" class="newsletter_form">
                                        <input type="text" placeholder="Enter your mail">
                                        <button type="submit">Sign Up</button>
                                    </form>
                                    <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="socail_links text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

        <!-- JS here -->
        <script src="js2/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js2/vendor/jquery-1.12.4.min.js"></script>
        <script src="js2/popper.min.js"></script>
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/owl.carousel.min.js"></script>
        <script src="js2/isotope.pkgd.min.js"></script>
        <script src="js2/ajax-form.js"></script>
        <script src="js2/waypoints.min.js"></script>
        <script src="js2/jquery.counterup.min.js"></script>
        <script src="js2/imagesloaded.pkgd.min.js"></script>
        <script src="js2/scrollIt.js"></script>
        <script src="js2/jquery.scrollUp.min.js"></script>
        <script src="js2/wow.min.js"></script>
        <script src="js2/nice-select.min.js"></script>
        <script src="js2/jquery.slicknav.min.js"></script>
        <script src="js2/jquery.magnific-popup.min.js"></script>
        <script src="js2/plugins.js"></script>

        <!--contact js-->
        <script src="js2/contact.js"></script>
        <script src="js2/jquery.ajaxchimp.min.js"></script>
        <script src="js2/jquery.form.js"></script>
        <script src="js2/jquery.validate.min.js"></script>
        <script src="js2/mail-script.js"></script>

        <script src="js2/main.js"></script>

    </body>

    </html>
