<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/img/apple-touch-icon-114x114-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('assets/img/apple-touch-icon-144x144-precomposed.png') }}">

        <!-- GOOGLE WEB FONT -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

        <!-- BASE CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/vendors.css') }}" rel="stylesheet">

        <!-- ALTERNATIVE COLORS CSS -->
        <link href="#" id="colors" rel="stylesheet">
    </head>
    <body class="datepicker_mobile_full">
        <div id="page">
            <header class="header menu_fixed">
                <div id="preloader"><div data-loader="circle-side"></div></div>
                <div id="logo">
                    <a href="{{ URL::to('/') }}">
                        <img src="{{ asset('assets/img/logo.svg') }}" width="150" height="36" alt="Logo" class="logo_normal">
                        <img src="{{ asset('assets/img/logo_sticky.svg') }}" width="150" height="36" alt="Logo" class="logo_sticky">
                    </a>
                </div>
                <ul id="top_menu">
                    <li><a href="{{ URL::to('/cart') }}" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
                    <li><a href="{{ URL::to('/login') }}" id="sign-in" class="login" title="Sign In">Sign In</a></li>
                    <li><a href="{{ URL::to('/wishlist') }}" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
                </ul>
                <!-- /top_menu -->
                <a href="#menu" class="btn_mobile">
                    <div class="hamburger hamburger--spin" id="hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>

                <livewire:components.navbar />
            </header>

            <main>
                {{ $slot }}
            </main>

            <livewire:components.footer />
        </div>

        <div id="toTop"></div>

        <!-- COMMON SCRIPTS -->
        <script src="{{ asset('assets/js/common_scripts.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- DATEPICKER  -->
        <script>
        $(function() {
            'use strict';

            $('input[name="dates"]').daterangepicker({
                autoUpdateInput: false,
                minDate:new Date(),
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
            });

            $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

        });
        </script>

        <script src="{{ asset('assets/js/input_qty.js') }}"></script>
    </body>
</html>
