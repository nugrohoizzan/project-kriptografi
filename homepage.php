<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>OK-JEK</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
            <?php
      
        session_start(); 
        //echo $_SESSION['username'];

        if(empty($_SESSION['username'])) {
            echo "
                <script>
                    alert('Anda belum login. Silakan login terlebih dahulu.');
                    document.location.href = 'login.php';
                </script>
            ";
        }
    ?>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/okjek.png">
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pendapat</a>
                                <ul>
                                    <li><a href="review.php">Pengalaman</a></li>
                                    <li><a href="kritik.php">Kritik</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#menu">Program</a></li> 
                            <li><a href="logout.php">Logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>OK-JEK</h4>
                            <h6>Solusi Praktis Perjalanan Anda</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="https://img.freepik.com/free-vector/people-driving-modern-electric-transport_52683-41147.jpg?w=1060&t=st=1700529324~exp=1700529924~hmac=a5d6d12740c7ebe2a397e004dec2b1cfa85867a57ba7e6099e8d678f23ff895f" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="https://img.freepik.com/free-vector/location-pin-mobile-application_1308-48870.jpg?w=996&t=st=1700530396~exp=1700530996~hmac=30f6ac006589a7dc8c7312553136b5dd6b04555bce13b40fffd69e38ab65d6a8" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="https://img.freepik.com/free-vector/taxi-app-concept_23-2148496653.jpg?w=1060&t=st=1700529546~exp=1700530146~hmac=bbd88ade5e41b6397bf17e73b5fb4fb59c8a02bd35361f31a394ecf0c9b38963" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang Kami</h6>
                            <h2>Mengenal Lebih Dekat Layanan Ojek Online: Solusi Praktis Perjalanan Anda </h2>
                        </div>
                        <p>"Dalam era teknologi modern, transportasi pribadi semakin menjadi kebutuhan utama. Ojek online muncul sebagai solusi revolusioner, memungkinkan masyarakat untuk dengan mudah dan efisien bepergian dari satu tempat ke tempat lain. Artikel ini akan membahas identitas dan manfaat layanan ojek online, menjelaskan mengapa semakin banyak orang memilih opsi transportasi ini."</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/transport2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/transport1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/transport3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="https://img.freepik.com/free-photo/businesswoman-showing-her-smartphone-app-taxi-driver_23-2149236740.jpg?w=1060&t=st=1700530901~exp=1700531501~hmac=863b766c250e94400ac4e5bcfc81616f6e0856f046479b154d2c5765caa73de5" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Program kami</h6>
                        <h2>Pengantaran dan Mobilitas</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class='info'>
                              <h1 class='title'>Makanan</h1>
                              <p class='description'>Dapatkan semua makanan diantarkan ke depan pintu anda.</p>
                              <div class="main-text-button">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class='info'>
                              <h1 class='title'>Mart</h1>
                              <p class='description'>Temukan semua kebutuhan pokok anda dan masih banyak lagi.</p>
                              <div class="main-text-button">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                              <h1 class='title'>Pengiriman</h1>
                              <p class='description'>Kirim paket, dokumen dan lain-lainnya</p>
                              <div class="main-text-button">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class='info'>
                              <h1 class='title'>Jastip</h1>
                              <p class='description'>Dapatkan semua kebutuhan anda secara fleksibel dimana saja</p>
                              <div class="main-text-button">
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class='info'>
                              <h1 class='title'>Transportasi</h1>
                              <p class='description'>Pilih beragam kendaraan untuk membawa anda dari lokasi satu ke lainnya dengan aman.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Benefit</h6>
                        <h2>Keuntungan berada di perusahaan yang baik</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/abcd.jpg" alt="">
                                                            <h4>Manfaat kesehatan</h4>
                                                            <p>Kami berbagi tagihan - kesehatan, seluler, internet, dan lainnya.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/hhh.jpg" alt="">
                                                            <h4>Terbang untuk bekerja & bersenang-senang</h4>
                                                            <p>Jelajahi kantor baru, budaya, dan seribu pulau!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/counselling.jpg" alt="">
                                                            <h4>Konseling gratis</h4>
                                                            <p>Kami berbicara tentang kesehatan mental. Yang ini untuk Anda dan keluarga Anda.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/insurance.png" alt="">
                                                            <h4>Asuransi orang tua</h4>
                                                            <p>Bantuan kesehatan bersubsidi untuk orang tua Anda.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/carrierr.jpg" alt="">
                                                            <h4>Pengembangan Karir dan Pelatihan</h4>
                                                            <p>peluang untuk pengembangan karir melalui pelatihan tambahan.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/management.jpg" alt="">
                                                            <h4>Manajemen yang Efektif</h4>
                                                            <p> menciptakan lingkungan kerja yang stabil dan dapat diandalkan.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright OK-Jek Co.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>