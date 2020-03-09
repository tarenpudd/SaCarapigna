<!DOCTYPE html>
<html lang="it">
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        
                
        <meta charset="utf-8">
        <meta name="author" content="Alberto Pranteddu">

        <!-- Icon -->
        <link rel="icon" sizes="192x192" href="images/favicon.png">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png" >
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" >
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" >

        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="theme-color" content="#0A0A0A">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/style-responsive.css" >
        <link rel="stylesheet" href="css/animate.min.css" >
        <link rel="stylesheet" href="css/vertical-rhythm.min.css" >
        <link rel="stylesheet" href="css/owl.carousel.css" >
        <link rel="stylesheet" href="css/magnific-popup.css" >
                
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script>
        <script type="text/javascript" src="js/it_cookie_law.js" ></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type=text/blocked async src="https://www.googletagmanager.com/gtag/js?id=UA-119960044-1"></script>
        <script type=text/blocked>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-119960044-1');
        </script>
    </head>

    <body>
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            @yield('content')

            <footer class="page-section bg-dark footer pt-30 pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mt-20 mb-30 wow fadeInUp" data-wow-duration="1s">
                        <a href="/"><img src="images/logo-white.png" width="350" alt="" /></a>
                    </div>
                    <!-- End Footer Logo -->

                    <!-- Social Links -->
                    <div class="footer-social-links mb-50 mb-xs-30">
                        <a href="https://www.facebook.com/carapigna" rel="noreferrer" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/carapigna_sebastianopranteddu/" rel="noreferrer" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                    <!-- End Social Links -->  

                    <!-- Footer Text -->
                    <div class="footer-text">

                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            &copy; Sa Carapigna di Sebastiano Pranteddu
                        </div>
                        <!-- End Copyright -->

                        <div class="footer-made">
                            Sa Carapigna Sebastiano Pranteddu - Sede legale: Via Marmilla 8 - 09029 Tuili (VS) <br>
                            P.IVA 03463910921 - sebastianopranteddu@pec.it
                        </div>
                        <div class="footer-made" style="margin-top: 15px;">
                            <a href="cookie-policy.php" style="font-size:11px; color: #fff">Privacy Policy</a>
                        </div>

                    </div>
                    <!-- End Footer Text --> 

                </div>

                <!-- Top Link -->
                <div class="local-scroll">
                    <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                </div>
                <!-- End Top Link -->
            </footer>
        </div>
        <!-- End Page Wrap -->
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"  ></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>        
        <script type="text/javascript" src="js/SmoothScroll.js" ></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js" ></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js" ></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js" ></script>
        <script type="text/javascript" src="js/jquery.countTo.js" ></script>
        <script type="text/javascript" src="js/jquery.appear.js"  ></script>
        <script type="text/javascript" src="js/jquery.sticky.js"  ></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js" ></script>
        <script type="text/javascript" src="js/jquery.fitvids.js" ></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"  ></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js" ></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js" ></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js" ></script>
        <script type="text/javascript" src="js/gmap3.min.js" ></script>
        <script type="text/javascript" src="js/wow.min.js" ></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js" ></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js" ></script>
        <script type="text/javascript" src="js/all.js"  ></script>
        <script type="text/javascript" src="js/contact-form.js"  ></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"  ></script>
        <script type="text/blocked" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIOb5GMT3oXLP-Z526C32M4aLVcbqlXR0&region=GB"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->        
    </body>
</html>