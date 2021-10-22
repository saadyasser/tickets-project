<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/d-goeveni/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Sep 2021 23:06:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - {{ $title }}</title>

    <link rel="icon" type="image/png" href="{{ asset('front/images/fav.png') }}">

    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
</head>

<body oncontextmenu="return false;">

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                        <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="index.html"><img
                                src="{{ asset('front/images/logo.svg') }}" alt=""></a>
                        <button class="navbar-toggler align-self-start" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-self-stretch">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="discussions.html">Discussion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="weather.html">weather</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle-no-caret" role="button"
                                        data-toggle="dropdown">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu pages-dropdown">
                                        <a class="link-item" href="login.html">Login</a>
                                        <a class="link-item" href="register.html">Register</a>
                                        <a class="link-item" href="error_404.html">Error 404</a>
                                        <a class="link-item" href="categories.html">Categories</a>
                                        <a class="link-item" href="select_seats.html">Select Seats</a>
                                        <a class="link-item" href="find_friends.html">Find Friends</a>
                                        <a class="link-item" href="user_dashboard_activity.html">User Detail View</a>
                                        <a class="link-item" href="checkout.html">Checkout</a>
                                        <a class="link-item" href="confirmed_order.html">Confirmed Order</a>
                                        <a class="link-item" href="about.html">About</a>
                                        <a class="link-item" href="contact_us.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="our_blog.html">Blog</a>
                                </li>
                            </ul>
                            <button href="add_new_event.html" style="border: none;" class="add-event"
                                id="status-button">
                                {{ Auth::user()->status }}
                            </button>
                            <!-- change status -->
                            <form action="{{route('users.status', Auth::id())}}" method="post" id="change-status">
                                @csrf
                                @method('put')
                                @if(Auth::user()->status == 'free')
                                <button href="add_new_event.html" style="border: none;" class="add-event"
                                    id="status-button">
                                    {{ 'Accept Orders' }}
                                </button>
                                @endif
                                @if(Auth::user()->status == 'busy')
                                <button href="add_new_event.html" style="border: none;" class="add-event"
                                    id="status-button">
                                    {{ 'Surving' }}
                                </button>
                                @endif
                            </form>
                            <!-- change status -->

                        </div>
                        <ul class="group-icons">
                            <li><a href="search_result.html" class="icon-set"><i class="fas fa-search"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="icon-set dropdown-toggle-no-caret" role="button"
                                    data-toggle="dropdown">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                                <div class="dropdown-menu user-request-dropdown dropdown-menu-right">
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}"
                                                        alt=""></a>
                                                <a href="#" class="user-title">Jassica William</a>
                                            </div>
                                            <button class="accept-btn">Accept</button>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}"
                                                        alt=""></a>
                                                <a href="#" class="user-title">Rock Smith</a>
                                            </div>
                                            <button class="accept-btn">Accept</button>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}"
                                                        alt=""></a>
                                                <a href="#" class="user-title">Joy Doe</a>
                                            </div>
                                            <button class="accept-btn">Accept</button>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <a href="my_dashboard_all_requests.html" class="view-all">View All Friend
                                            Requests</a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="icon-set dropdown-toggle-no-caret" role="button"
                                    data-toggle="dropdown">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}" alt="">
                                                    <div class="user-title1">Jassica William </div>
                                                    <span>Hey How are you John Doe...</span>
                                                </a>
                                            </div>
                                            <div class="time5">2 min ago</div>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}" alt="">
                                                    <div class="user-title1">Rock Smith </div>
                                                    <span>Interesting Event! I will join this...</span>
                                                </a>
                                            </div>
                                            <div class="time5">5 min ago</div>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}" alt="">
                                                    <div class="user-title1">Joy Doe </div>
                                                    <span>Hey Sir! What about you...</span>
                                                </a>
                                            </div>
                                            <div class="time5">10 min ago</div>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <a href="my_dashboard_messages.html" class="view-all">View All Messages</a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="icon-set dropdown-toggle-no-caret" role="button"
                                    data-toggle="dropdown">
                                    <i class="fas fa-bell"></i>
                                </a>
                                <div class="dropdown-menu notification-dropdown dropdown-menu-right">
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}" alt="">
                                                    <div class="user-title1">Jassica William </div>
                                                    <span>comment on your video.</span>
                                                </a>
                                            </div>
                                            <div class="time5">2 min ago</div>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}" alt="">
                                                    <div class="user-title1">Rock Smith</div>
                                                    <span>your order is accepted.</span>
                                                </a>
                                            </div>
                                            <div class="time5">5 min ago</div>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <div class="request-users">
                                            <div class="user-request-dt">
                                                <a href="#"><img src="{{ asset('front/images/user-dp-1.jpg') }}" alt="">
                                                    <div class="user-title1">Joy Doe </div>
                                                    <span>your bill slip sent on your email.</span>
                                                </a>
                                            </div>
                                            <div class="time5">10 min ago</div>
                                        </div>
                                    </div>
                                    <div class="user-request-list">
                                        <a href="my_dashboard_all_notifications.html" class="view-all">View All
                                            Notifications</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- @if(Auth::check()) -->
                        <div class="account order-1 dropdown">
                            <a href="#" class="account-link dropdown-toggle-no-caret" role="button"
                                data-toggle="dropdown">
                                <div class="user-dp"><img src="{{ asset('front/images/dp.jpg') }}" alt=""></div>
                                <span>Hi! Test</span>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                <a class="link-item" href="my_dashboard_activity.html">Profile</a>
                                <a class="link-item" href="my_dashboard_messages.html">Messages</a>
                                <a class="link-item" href="my_dashboard_booked_events.html">Booked Events</a>
                                <a class="link-item" href="my_dashboard_credits.html">Credit <span
                                        class="right-cm">$100</span></a>
                                <a class="link-item" href="invite.html">Invite</a>
                                <a class="link-item" href="my_dashboard_setting_info.html">Setting</a>
                                <a class="link-item" href="login.html">Logout</a>
                            </div>
                        </div>
                        <!-- @else -->
                        <a href="{{ route('login') }}" class="add-event">Login</a>
                        <!-- @endif -->
                    </nav>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="footer-left">
                        <ul>
                            <li><a href="privacy_policy.html">Privacy</a></li>
                            <li><a href="term_conditions.html">Term and Conditions</a></li>
                            < li><a href="about.html">About</a></li>
                                <li><a href="contact_us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="footer-right">
                        <ul class="copyright-text">
                            <li><a href="index.html"><img src="{{ asset('front/images/logo-2.svg') }}" alt=""></a></li>
                            <li>
                                <div class="ftr-1"><i class="far fa-copyright"></i> 2019 Goeveni by <a
                                        href="https://themeforest.net/user/gambolthemes">Gambolthemes</a>. All Rights
                                    Reserved.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('front/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('front/js/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/custom1.js') }}"></script>
    <script src="{{ asset('front/js/book-ticket.js') }}"></script>
    <script src="{{ asset('front/js/change-user-status.js') }}"></script>
    <script>
    const ticketId = "{{ $tid }}";
    </script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>

<!-- Mirrored from gambolthemes.net/html-items/d-goeveni/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Sep 2021 23:06:25 GMT -->

</html>