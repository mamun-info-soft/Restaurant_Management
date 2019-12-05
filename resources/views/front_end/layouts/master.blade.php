<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>conX Restaurant</title>

        <link rel="stylesheet" href="{{ asset('assets/css/et_line_font.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <!-- Bulma CSS Framework Style Sheets Links -->
        <link rel="stylesheet" href="{{ asset('assets/css/bulma.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/preview-slider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    </head>
    <body class="">
        <!-- Application Header Section Started With Navigation -->
        <header>
            <nav class="navbar is-primary" role="navigation" aria-label="main navigation">

                <!-- Company Logo and Mobile Hum-Burger Menu Start -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <!-- Company Logo and Mobile Hum-Burger Menu End -->

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">
                            Home
                        </a>

                        <a class="navbar-item">
                            About Us
                        </a>

                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                More
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    About
                                </a>
                                <a class="navbar-item">
                                    Jobs
                                </a>
                                <a class="navbar-item">
                                    Contact
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    Report an issue
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-end has-text-centered">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link is-arrowless">
                                <i class="icon-grid has-text-black"></i>
                            </a>
                            <div class="navbar-dropdown  is-right level-item">
                                <a class="navbar-item ttt is-size-7">
                                    Manage your Account
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item is-size-7">
                                    Elements
                                </a>
                                <a class="navbar-item">
                                    Component
                                </a>
                                <hr class="navbar-divider">
                                <a class="button is-small">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Application Header Section End With Navigation -->

        <!-- Main Image Slider Section Start -->


        <!-- Main Image Slider Section Start -->

        <!-- Footer Section Start -->
        <footer class="do-footer has-background-grey-darker has-text-white">
            <div class="columns">
                <div class="column">
                    <img class="is-inner-footer" src="{{ asset('assets/img/logo/amara.png') }}" alt="">
                </div>
                <div class="column">
                    <h1 class="is-size-4">conX Restaurant</h1>
                    <div class="do-footer-locale">
                        <div class="">
                            <a class="has-text-light do-display-block do-mt-4">
                                <i class="icon-map-pin do-mr-3"></i>
                                87/A, Longest Motel Road, Coxsbazar.
                            </a>
                            <a class="has-text-light do-display-block do-mt-3">
                                <i class="icon-mobile do-mr-3"></i>
                                017-889-94455-210
                            </a>
                            <a class="has-text-light do-display-block do-mt-3 is-size-4">
                                <i class="fab fa-facebook-square do-mr-2"></i>
                                <i class="fab fa-twitter-square do-mr-2"></i>
                                <i class="fab fa-instagram do-mr-2"></i>
                                <i class="fab fa-youtube-square"></i>
                                <i class="fas fa-cog"></i>
                            </a>
                            <a class="has-text-light do-display-block do-mt-3 is-size-6">
                                All Right Reserved Dr. Mams.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium adipisci aliquid animi, architecto blanditiis consequuntur eveniet
                    expedita id ipsum laborum pariatur possimus.
                    Accusantium est expedita iure officia optio repellat, temporibus?
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->


        <!-- ------------------ ----------------- ------------------
        -                                                          -
        -           ALL SCRIPT FILE INJECTED HERE                  -
        -                                                          -
        ------------------------------------------------------------>
        <script src="{{ asset('assets/js/preview-slider.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
