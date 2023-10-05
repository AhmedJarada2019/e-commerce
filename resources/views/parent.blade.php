<!DOCTYPE html>
<html class="loading" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    @if (Config::get('app.locale') == 'en')
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-ecommerce-shop.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @else
        <!-- END: Custom CSS-->



        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors-rtl.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/colors.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/themes/dark-layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/themes/semi-dark-layout.css') }}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/app-ecommerce-shop.css') }}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/custom-rtl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
        <!-- END: Custom CSS-->
    @endif
    <style>
        #footer {
            background: #f7f7f7;
            padding: 3rem;
            /* padding-top: 5rem; */
            padding-top: 7rem;
            padding-bottom: 80px;
            background-image: url(https://arena.km.ua/wp-content/uploads/3538533.jpg);
        }

        #footer2 {
            background: #f7f7f7;
            padding: 3rem;
            margin-top: 0px;
            /* padding-top: 5rem; */
            padding-top: 7rem;
            padding-bottom: 80px;
            background-image: url(../images/cards/v748-toon-111.png);
        }

        .social-links h2 {
            padding-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        .social-links img {
            padding-bottom: 25px;
        }

        .social-icons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            color: #777777;
        }

        .social-icons a {
            color: #777777;
        }

        .social-icons a:hover {
            color: #000;
        }

        .social-icons a i {
            box-shadow: rgb(0 0 0 / 8%) 0px 4px 12px;
            padding: 0.4rem 1rem 0.4rem 1rem;
            border-radius: 3px;
            color: #82074a;
            font-size: 16px;
            margin-right: 12px;
        }

        li {
            list-style: none;
        }

        .useful-link h2 {
            padding-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        .useful-link img {
            padding-bottom: 15px;
        }

        .use-links {
            line-height: 32px;
        }

        .use-links li i {
            font-size: 14px;
            padding-right: 8px;
            color: #898989;
        }

        .use-links li a {
            color: #303030;
            font-size: 15px;
            font-weight: 500;
            color: #777777;
        }

        .use-links li a:hover {
            color: #000;
        }

        .address h2 {
            padding-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        .address img {
            padding-bottom: 15px;
        }

        .address-links li a {
            color: #303030;
            font-size: 15px;
            font-weight: 500;
            color: #777777;

        }

        .address-links li i {
            font-size: 16px;
            padding-right: 8px;
            color: #82074a;

        }

        .address-links li i:nth-child(1) {
            padding-top: 9px;
        }

        .address-links .address1 {
            font-weight: 500;
            font-size: 15px;
            display: flex;
        }

        .address-links {
            line-height: 32px;
            color: #777777;
        }

        .copy-right-sec {
            padding: 1.8rem;
            background: #7367F0;
            color: #fff;
            text-align: center;
        }

        .copy-right-sec a {
            color: #fcd462;
            font-weight: 500;
        }

        a {
            text-decoration: none;
        }

        .card .ribbon {
            width: 150px;
            height: 150px;
            position: absolute;
            top: -10px;
            left: -10px;
            overflow: hidden;
        }

        .card .ribbon::before,
        card .ribbon::after {
            position: absolute;
            content: "";
            z-index: -1;
            display: block;
            border: 7px solid #ba24f0;
            border-top-color: transparent;
            border-left-color: transparent;
        }

        .card .ribbon::before {
            top: 0px;
            right: 15px;
        }

        .card .ribbon::after {
            bottom: 15px;
            left: 0px;
        }

        .card .ribbon span {
            position: absolute;
            top: 30px;
            right: 0;
            transform: rotate(-45deg);
            width: 200px;
            background: #ba24f0;
            padding: 10px 0;
            color: #fff;
            text-align: center;
            font-size: 17px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
        }

        @include('style');
    </style>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>
        @if (Config::get('app.locale') == 'ar')
            {{ $data->ar_name }}
        @endif
        {{ $data->en_name }}
    </title>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns ecommerce-application navbar-floating footer-static  "
    data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center p-0">
        <div class="navbar-wrapper" style="background-color: {{ $data->navbar_color }}">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block">
                                <div class="search-input">
                                    <img src="{{ asset('app-assets/images/logo/logo.png') }}" alt=""
                                        style="width:4rem">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                @if (Config::get('app.locale') == 'ar')
                                    <i class="flag-icon flag-icon-ps"></i>
                                @else
                                    <i class="flag-icon flag-icon-us"></i>
                                @endif
                                <span class="selected-language">{{ app()->getLocale() }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">

                                @foreach (config('app.available_locales') as $locale => $language)
                                    <a href="{{ route('setLocale', $locale) }}"
                                        class="{{ app()->getLocale() === $locale ? 'active' : '' }} dropdown-item">
                                        {{ $language }}
                                    </a>
                                    {{-- <a class="dropdown-item" href="#" data-language="en"><i
                                        class="flag-icon flag-icon-us"></i>
                                    English</a> --}}
                                @endforeach
                                </select>
                            </div>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                    data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label"
                                href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App
                                            Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between"
                                        href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small
                                                    class="notification-text"> Are your going to meet me
                                                    tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-download-cloud font-medium-5 success"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation
                                                </h6><small class="notification-text">Server have 99% CPU
                                                    usage.</small>
                                            </div><small>
                                                <time class="media-meta"
                                                    datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small
                                                    class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small
                                                    class="notification-text">Chocolate cake oat cake tiramisu
                                                    marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                        href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                        Doe</span><span class="user-status">Available</span></div><span><img
                                        class="round"
                                        src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a
                                    class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                    Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="auth-login.html"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('app-assets/images/icons/xls.png') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('app-assets/images/icons/jpg.png') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('app-assets/images/icons/pdf.png') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('app-assets/images/icons/doc.png') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('app-assets/images/portrait/small/avatar-s-8.jpg') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('app-assets/images/portrait/small/avatar-s-1.jpg') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('app-assets/images/portrait/small/avatar-s-14.jpg') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('app-assets/images/portrait/small/avatar-s-6.jpg') }}" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
            role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                            <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                                data-ticon="icon-disc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    {{-- @dd($categories) --}}
                    @foreach ($categories as $category)
                        {{-- @dd($category) --}}
                        @if ($category->shown_in_top_menu == 33 && $category->categories_count > 0)
                            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                                    href="index.html" data-toggle="dropdown"><i class="feather icon-home"></i><span
                                        data-i18n="Dashboard">
                                        @if (Config::get('app.locale') == 'ar')
                                            {{ $category->ar_name }}
                                        @else
                                            {{ $category->en_name }}
                                        @endif
                                    </span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($category->categories as $item)
                                        <li data-menu=""><a class="dropdown-item" href="dashboard-analytics.html"
                                                data-toggle="dropdown" data-i18n="Analytics"><i
                                                    class="feather icon-activity"></i>
                                                @if (Config::get('app.locale') == 'ar')
                                                    {{ $item->ar_name }}
                                                @else
                                                    {{ $item->en_name }}
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @elseif ($category->shown_in_top_menu == 33 && $category->parent_id == 0)
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    @if (Config::get('app.locale') == 'ar')
                                        {{ $category->ar_name }}
                                    @else
                                        {{ $category->en_name }}
                                    @endif
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

                </ul>
            </div>
        </div>
    </div>

    <!-- END: Main Menu-->

    @yield('content')

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer-light navbar-shadow">
        <div class="container">
            <div class="row mt-5" style="padding-top: 50px">
                <div class="col-md-3">
                    <a href="index.html"><img src="{{ asset('app-assets/images/logo/logo-primary.png') }}"
                            alt="" class="img-fluid logo-footer"></a>
                    <div class="footer-about">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="useful-link">
                        <h2>{{ __('follow_us') }}</h2>
                        <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                        <div class="use-links">
                            <li><a href="index.html"><i class="fa-solid fa-angles-right"></i>{{ __('home') }}</a>
                            </li>
                            <li><a href="about.html"><i class="fa-solid fa-angles-right"></i>{{ __('about') }}</a>
                            </li>
                            <li><a href="gallery.html"><i
                                        class="fa-solid fa-angles-right"></i>{{ __('gallery') }}</a></li>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="social-links">
                        <h2>{{ __('useful_links') }}</h2>
                        <img src="./assets/images/about/home_line.png" alt="">
                        <div class="social-icons">
                            <li><a href="{{ $data->facebooke_account }}"><i class="feather icon-facebook"></i>
                                    {{ __('Facebook') }}</a></li>
                            <li><a href="{{ $data->instagram_account }}"><i class="feather icon-instagram"></i>
                                    {{ __('Instagram') }}</a></li>
                            <li><a href="{{ $data->twitter_account }}"><i class="feather icon-twitter"></i>
                                    {{ __('Twitter') }}</a></li>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h2>{{ __('address') }}</h2>
                        <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                        <div class="address-links">
                            <li class="address1"><i class="fa-solid fa-location-dot"></i> Kolathur ramankulam-
                            <li><a href=""><i class="fa-solid fa-phone"></i> {{ $data->website_phone }}</a>
                            </li>
                            <li><a href=""><i class="fa-solid fa-envelope"></i>{{ $data->website_email }}</a>
                            </li>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- footer section end -->
        <!-- footer copy right section start -->
        <section id="copy-right">
            <div class="copy-right-sec"
                style="background-color: {{ $data->footer_color }}!important; color:{{ $data->footer_text_color }}">
                <i class="fa-solid fa-copyright"></i>
                {{ $data->copy_right }}
            </div>
        </section>
        <!-- footer copy right section end -->
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-shop.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        document.querySelectorAll('.language-link').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default link behavior

                const selectedLocale = this.getAttribute('data-locale');
                const url = `{{ route('setLocale', ':locale') }}`.replace(':locale', selectedLocale);
                fetch(url, {
                        method: 'POST'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.querySelectorAll('.language-link').forEach(link => {
                                link.classList.remove('active');
                            });
                            this.classList.add('active');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>

</body>

<!-- END: Body-->

</html>
