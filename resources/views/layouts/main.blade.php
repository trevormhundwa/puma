<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>Boas Distribution & Logistics</title>

    <!-- Stylesheets -->

    <link href="{{asset('front-end/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('front-end/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->

    <link href="{{asset('front-end/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->

    <link href="{{asset('front-end/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

    <link href="{{asset('front-end/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('front-end/css/responsive.css')}}" rel="stylesheet">



    <!--Color Switcher Mockup-->

    <link href="{{asset('front-end/css/color-switcher-design.css')}}" rel="stylesheet">



    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">



    <!-- Responsive -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->


</head>



<body>



<div class="page-wrapper">



    <!-- Preloader -->

    <div class="preloader"></div>



    <!-- Main Header / Header Style Two-->

    <header class="main-header header-style-two">
        <!--Header Top-->

        <div class="header-top">

            <div class="auto-container">

                <div class="clearfix">

                    <!--Top Right-->

                    <div class="top-right pull-right">

                        <ul class="clearfix">

                            <li style="background-color: #0a0a0a">Zimbabwe's Official Distributor</li>

                            <li style="background-color: #00764a">Puma's Corporate Website</li>

                            <li style="background-color: #da071d">Puma 2017 Report</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>



        <!-- Main Box -->

        <div class="main-box">

            <div class="auto-container">

                <div class="outer-container clearfix">

                    <!--Logo Box-->

                    <div class="logo-box">

                        <div class="logo"><a href="/"><img src="front-end/images/logo.png" alt=""></a></div>

                    </div>



                    <!--Nav Outer-->

                    <div class="nav-outer clearfix">



                        <!-- Main Menu -->

                        <nav class="main-menu">

                            <div class="navbar-header">

                                <!-- Toggle Button -->

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>



                            <div class="navbar-collapse collapse clearfix">

                                <ul class="navigation clearfix">

                                    <li><a href="/">Home</a></li>
                                    <li><a href="/products">Products</a></li>
                                    <li><a href="/media-center">Media Center</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>

                                </ul>

                            </div>

                        </nav>

                        <!-- Main Menu End-->



                        <!--Outer Box-->

                        <div class="outer-box">

                            <div class="contact-number">

                                <span class="icon flaticon-technology-3"></span>

                                Call Us Now

                                <strong>+44 567 8901 23</strong>

                            </div>

                        </div>



                    </div>

                    <!--Nav Outer End-->



                </div>

            </div>

        </div>



        <!--Sticky Header-->

        <div class="sticky-header">

            <div class="auto-container clearfix">

                <!--Logo-->

                <div class="logo pull-left">

                    <a href="index.html" class="img-responsive"><img src="front-end/images/logo-small.png" alt="" title=""></a>

                </div>



                <!--Right Col-->

                <div class="right-col pull-right">

                    <!-- Main Menu -->

                    <nav class="main-menu">

                        <div class="navbar-header">

                            <!-- Toggle Button -->

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                            </button>

                        </div>



                        <div class="navbar-collapse collapse clearfix">

                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a></li>
                                <li><a href="/products">Products</a></li>
                                <li><a href="/media-center">Media Center</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/contact-us">Contact Us</a></li>
                            </ul>

                        </div>

                    </nav><!-- Main Menu End-->

                </div>



            </div>

        </div>

        <!--End Sticky Header-->



    </header>

    <!--End Main Header -->



    <!--Page Title-->

    <section class="page-title" style="background-image:url(front-end/images/background/5.jpg)">

        <div class="auto-container">

            <h1> @yield('banner-header')</h1>

            <ul class="page-breadcrumb">

                <li><a href="index.html">Home</a></li>

                <li>Projects</li>

            </ul>

        </div>

    </section>

    <!--End Page Title-->

    @yield('content')

    <!--Main Footer-->

    <footer class="main-footer" style="background-image:url(images/background/5.jpg)">


        <div class="footer-bottom">

            <div class="auto-container">

                <div class="copyright">&copy; Copyright 2018. All Rights Reserved. Designed by <a target="_blank" class="designed_by" href="www.urbnanwire.co.zw">Urbanwire</a></div>


            </div>

        </div>

    </footer>

    <!--End Main Footer-->



</div>

<!--End pagewrapper-->



<!--Scroll to top-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>





<script src="{{asset('front-end/js/jquery.js')}}"></script>

<!--Revolution Slider-->

<script src="{{asset('front-end/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>

<script src="{{asset('front-end/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<script src="{{asset('front-end/js/main-slider-script.js')}}"></script>



<script src="{{asset('front-end/js/bootstrap.min.js')}}"></script>

<script src="{{asset('front-end/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script src="{{asset('front-end/js/jquery.fancybox.js')}}"></script>

<script src="{{asset('front-end/js/owl.js')}}"></script>

<script src="{{asset('front-end/js/validate.js')}}"></script>

<script src="{{asset('front-end/js/mixitup.js')}}"></script>

<script src="{{asset('front-end/js/appear.js')}}"></script>

<script src="{{asset('front-end/js/wow.js')}}"></script>

<script src="{{asset('front-end/js/jquery-ui.js')}}"></script>

<script src="{{asset('front-end/js/script.js')}}"></script>

<!--Google Map APi Key-->

<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>

<script src="{{asset('front-end/js/map-script-2.js')}}"></script>

<!--End Google Map APi-->

<!--Color Switcher-->

<script src="{{asset('front-end/js/color-settings.js')}}"></script>

</body>

</html>