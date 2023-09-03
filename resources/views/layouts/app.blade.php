<!DOCTYPE html>
<html lang="en">

<head>
    <title>CUEA-GRADUATION</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset ( 'assets/images/logocuea.jpg')}}" rel="icon">
    <meta name="description" content="CUEA GRADUATION">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{ asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/styles/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ( 'assets/styles/custom.css')}}">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
                <!-- Logo -->
                <div class="logo_container">
                    <div class="logo">
                        <img src="{{ asset ( 'assets/images/logocuea.jpg')}}" style="position: relative; height: 60px; width: auto;" alt="">
                        <span>CUEA</span>
                    </div>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="{{ route('home')}}">home</a></li>
                            <li class="main_nav_item"><a href="{{ route('events')}}">news</a></li>
                            <li class="main_nav_item"><a href="{{ route('resources')}}">Resources</a></li>
                            <li class="main_nav_item"><a href="{{ route('contact')}}">contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="header_side d-flex flex-row justify-content-center">
                <!-- <img src="images/phone-call.svg" alt=""> -->
                @include('includes.timer')
            </div>

            <!-- Hamburger -->
            <div class="hamburger_container">
                <i class="fas fa-bars trans_200"></i>
            </div>

        </header>
        <div class="timer_mobile d-flex flex-row justify-content-center">
            @include('includes.timer')
        </div>



        <!-- Menu -->
        <div class="menu_container menu_mm">

            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="{{ route('home')}}">Home</a></li>
                        <li class="menu_item menu_mm"><a href="{{ route('events')}}">events</a></li>
                        <li class="menu_item menu_mm"><a href="{{ route('resources')}}">resources</a></li>
                        <li class="menu_item menu_mm"><a href="{{ route('contact')}}">Contact</a></li>
                    </ul>

                    <div class="menu_copyright menu_mm">CUEA All rights reserved</div>
                </div>

            </div>

        </div>



        @yield('content')



        <!-- Footer -->

        <footer class="footer">
            <div class="container">

                <!-- Newsletter -->

                <!-- Footer Content -->

                <div class="footer_content">
                    <div class="row">

                        <!-- Footer Column - About -->
                        <div class="col-lg-3 footer_col">

                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">
                                    <img src="{{ asset ( 'assets/images/logocuea.jpg')}}" style="position: relative; height: 60px; width: auto;" alt="">
                                    <span>CUEA</span>
                                </div>
                            </div>

                            <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

                        </div>

                        <!-- Footer Column - Menu -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Menu</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="#">Home</a></li>
                                    <li class="footer_list_item"><a href="#">About Us</a></li>
                                    <li class="footer_list_item"><a href="courses.html">Courses</a></li>
                                    <li class="footer_list_item"><a href="news.html">News</a></li>
                                    <li class="footer_list_item"><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Usefull Links -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Usefull Links</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                    <li class="footer_list_item"><a href="#">FAQ</a></li>
                                    <li class="footer_list_item"><a href="#">Community</a></li>
                                    <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                    <li class="footer_list_item"><a href="#">Tuitions</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Contact -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Contact</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{ asset('assets/images/placeholder.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        Blvd Libertad, 34 m05200 Arévalo
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{ asset('assets/images/smartphone.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        0034 37483 2445 322
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{ asset('assets/images/envelope.svg') }}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>hello@company.com
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Copyright -->

                <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                    <div class="footer_copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Created with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://toroyteach.com" target="_blank">Toroyteach</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="footer_social ml-sm-auto">
                        <ul class="menu_social">
                            <li class="menu_social_item"><a href="https://www.youtube.com/channel/UCkPi1mamzw2vcA97zWS76lw"><i class="fab fa-youtube"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.instagram.com/cuea_official/"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.facebook.com/TheCatholicUniversityOfEasternAfricaCuea?ref=bookmarks"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>

    </div>

    <script src="{{ asset ( 'assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset ( 'assets/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{ asset ( 'assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset ( 'assets/plugins/easing/easing.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js" integrity="sha512-HYG9E+RmbXS7oy529Nk8byKFw5jqM3R1zzvoV2JnltsIGkK/AhZSzciYCNxDMOXEbYO9w6MJ6SpuYgm5PJPpeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset ( 'assets/js/custom.js')}}"></script>

</body>

</html>