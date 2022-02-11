<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TESDA/RTC-Iligan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="{{asset('stack/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('stack/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
        <link href="{{asset('stack/css/font-roboto.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('css/frontend.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container">
            <div class="via-1641870894008" via="via-1641870894008" vio="Home">
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="{{URL::to('/')}}"> <img class="logo logo-dark" alt="logo" src="{{asset('img/logoheader.png')}}"> <img class="logo logo-light" alt="logo" src="{{asset('img/logoheader.png')}}"> </a>
                            </div>
                            <div class="col-9 col-md-10 text-right">
                                <a href="{{URL::to('/')}}" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu1" class="bar bar-1 hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-2 hidden-xs">
                                <div class="bar__module">
                                    <a href="{{URL::to('/')}}"> <img class="logo logo-dark" alt="logo" src="{{asset('img/logoheader.png')}}"> <img class="logo logo-light" alt="logo" src="{{asset('img/logoheader.png')}}"> </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                        <li> 
                                            <a href="{{URL::to('/')}}">Home</a>
                                        </li>
                                       <li class="dropdown"> <span class="dropdown__trigger">
                                        About Us
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-3">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('mission-vision')}}">Mission&Vision</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('location-map')}}">Location Map</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('organizational-structure')}}">Organizational Structure</a> </li>
                                                            </ul>
                                                             <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('rtc-personnel')}}">RTC Personnel</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Program & Services
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Single Link</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Transparency
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Transparency Seal</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Citizen Charter</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Philgeps</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Others
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-3">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/reservation')}}">Online Reservation</a> </li>
                                                            </ul>
                                                            <!-- <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/contact-us')}}">Contact Us</a> </li>
                                                            </ul> -->
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/gallery')}}">Gallery</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/newsupdates')}}">News and Updates</a> </li>
                                                            </ul>
                                                            <ul class="menu-vertical">
                                                                <li> <a href="{{URL::to('/success-stories')}}">Success Stories</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Online Course
                                        </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Single Link</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-container">
            @yield('content')
        </div>
            <footer class="footer-4 space--sm text-center-xs" style="background-color: gray;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6"> <img alt="Image" width="90" height="75" src="{{asset('img/rtclogo.png')}}"> <span class="block--xs text-white">RTC-ILIGAN OFFCIAL WEBSITE</span> </div>
                        <div class="col-sm-6">
                            <form class="row" action="//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Please provide your email address.">
                                <div class="col-sm-7"> <input class="validate-required validate-email" type="text" name="EMAIL" placeholder="Email Address"> </div>
                                <div class="col-sm-5"> <button type="submit" class="btn btn--primary type--uppercase">Subscribe</button> </div>
                                <div style="position: absolute; left: -5000px" aria-hidden="true"> <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value=""> </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-white"> <span class="type--fine-print">© <span class="update-year"></span> Gasa.tech</span> </div>
                        <div class="col-sm-6 text-right text-center-xs block--xs">
                            <ul class="social-list list-inline list--hover">
                                <li><a mail="rtciligan@tesda.gov.ph"><i class="socicon socicon-google icon icon--xs"></i></a></li>
                                <li><a href="#"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                                <li><a href="#"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                <li><a href="#"><i class="socicon socicon-instagram icon icon--xs"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('stack/js/parallax.js')}}"></script>
        <script src="{{asset('stack/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('stack/js/scripts.js')}}"></script>

    </body>

</html>