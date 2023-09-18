<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Include Tiny Slider CSS and JS from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.10.2/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.10.2/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="{{ asset('hero/css/owl.carousel.min.css') }}">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('hero/css/style.css') }}">
    <link href='{{ asset('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}' rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="{{ asset('../assets/vendor/css/rtl/core.css" class="template-customizer-core-css') }}" />
    <link rel="stylesheet"
        href="{{ asset('../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('style/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('style/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/thankyou.css') }}">




    {{-- chat --}}

    <link rel="stylesheet" href="{{ asset('css/appchat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylechat.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    @livewireStyles

    <title>@yield('title')</title>
    <link rel="icon" href="{!! asset('assets/img/furnishareyellow.png') !!}" />
    <style>
        /* .imgnav{
   max-width: 70px;
  }
   @media only screen and (min-width: 481px) and (max-width: 768px) {

 .imgnav{
   max-width: 50px;
  }
   }
   @media only screen and (max-width: 480px) {
 .imgnav{
   max-width:50px;
  }
  .name{
   font-size: 15px
  }
   } */


        .site-nav {
            /* background-color: #222; */
            padding-top: 10px;
            top: 0px;
            padding-bottom: 0px;
            /* border: 1px solid #eee; */
            box-shadow: 10px 10px 5px #d8d8d8;
        }

        .site-nav .site-navigation .site-menu>li>a {
            color: #222;

        }
    </style>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-1">

                            <a href="{{ route('home') }}" class="logo m-0 float-start text-white"><img
                                    src="{{ asset('assets/img/furnishareblack.png') }}" alt=""
                                    width="80"></a>
                        </div>
                        <div class="col-7 text-center">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('Give Donation') ? 'active' : '' }}"><a
                                        href="{{ route('Give Donation') }}">Financial</a></li>
                                <li class="{{ request()->routeIs('Give Services') ? 'active' : '' }}"><a
                                        href="{{ route('Give Services') }}">Services</a></li>
                                <li class="{{ request()->routeIs('Give Items') ? 'active' : '' }}"><a
                                        href="{{ route('Give Items') }}">Item</a></li>
                                <li class="{{ request()->routeIs('volunteer') ? 'active' : '' }}"><a
                                        href="{{ route('volunteer') }}">Volunteer</a></li>
                                <li class="{{ request()->routeIs('aboutus') ? 'active' : '' }}"><a
                                        href="{{ route('aboutus') }}">About</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                                {{-- <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('chatpage') }}"> <i class='bx bxs-message-dots' style='color:#ffc107; font-size:25px; padding-top:10px  '></i></a></li> --}}
                            </ul>
                        </div>









                        <div class="col-4 text-end">

                            <div class="d-flex align-items-center justify-content-end">
                                @if (Route::has('login'))
                                    @auth
                                        <div class="nav-item navbar-dropdown dropdown-user dropdown">

                                            <a class="nav-link " href="#" id="userDropdown"
                                                data-bs-toggle="dropdown">
                                                <div
                                                    style="display: flex; align-items: center; justify-content: flex-end; ">

                                                    <span class="name"
                                                        style="color:rgb(0, 0, 0); padding-right:7px; color:black">{{ auth()->user()->name }}</span>
                                                    <div style="color: #000000; padding-right:10px; font-size:13px"><i
                                                            class='bx bxs-down-arrow'></i></div>
                                                    <img src="{{ auth()->user()->image }}" alt="Image"
                                                        class="imgnav img-fluid rounded-circle"
                                                        style="width: 50px; height: 50px;">
                                                </div>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                                        <i class="mdi mdi-account-outline me-2"></i>
                                                        <span class="align-middle">My Profile</span>
                                                    </a>
                                                </li>
                                                <li>
													<div class="dropdown-divider"></div>
												</li>
												<li>
													<a class="dropdown-item" href="{{ route('chatpage') }}">
														<i class="mdi mdi-exit-to-app me-2"></i>
														<span class="align-middle">Chat</span>
													</a>
												</li>
                                                <li>
                                                    <div class="dropdown-divider"></div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                                        <i class="mdi mdi-exit-to-app me-2"></i>
                                                        <span class="align-middle">Log Out</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}" class="btn  btn-warning" style="color: white;">
                                            <span>Login</span>
                                        </a>
                                        <a href="{{ route('register') }}" class="btn btn-primary"
                                            style=" margin-left:10px">
                                            <span>Register</span>
                                        </a>
                                    @endauth
                                @endif

                                <div class="col-3 text-end">
                                    <a href="#"
                                        class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none dark">
                                        <span></span>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
