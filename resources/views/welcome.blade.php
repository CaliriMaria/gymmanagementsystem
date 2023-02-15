<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GymManagementSystem</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,500;1,900&display=swap"
          rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!--Font awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-weight: normal;
            font-size: 15px;
            letter-spacing: 1.5px;
            color: #888;
            line-height: 30px;
        }

        /*.hero-section {*/
        /*    background-image:;*/
        /*    background-color: rgba(0, 0, 0, 0);*/
        /*    background-position: center center;*/
        /*    background-repeat: no-repeat;*/
        /*    background-attachment: fixed ;*/
        /*    background-size: cover;*/
        /*    width: 100vw;*/
        /*    height: 80vh;*/
        /*}*/
        .hero-section {
            background: rgba(0, 0, 0, 0) url("{{ asset('img/fitness_model_big.jpg') }}") no-repeat fixed left top / cover;
            height: 603px;
            position: relative;
        }
        @media only screen and (min-width: 240px) and (max-width: 480px) {
            .hero-section {
                background-image: url("{{ asset('img/fitness_model_small.jpg') }}");
                height: 450px;
                background-position: 50% 0;
                background-size: cover;
                background-attachment: scroll;
                background-repeat: no-repeat;
            }
        }

        @media (min-width: 481px) and (max-width: 1024px) {
            .hero-section {
                background-image: url("{{ asset('img/fitness_model_big.jpg') }}");
            }
        }


        /*.container {*/
        /*    width: 1170px;*/
        /*    padding-right: 15px;*/
        /*    margin-right: auto;*/
        /*    margin-left: auto;*/
        /*}*/

        @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }

            @media (min-width: 992px) {
                .container {
                    width: 970px;
                }
            }
                @media (min-width: 768px) {
                    .container {
                        width: 750px;
                    }
                }
                    .container {
                        padding-right: 15px;
                        margin-right: auto;
                        margin-left: auto;
                    }


        /* header */
        .header-top {
            background: #2c2c2c none repeat scroll 0 0;
            width: 100%;
        }

        .header-top-left ul li a {
            color: #717171;
            display: inline-block;
            font-size: 18px;
        }

        .header-top-left ul li {
            display: inline-block;
            margin-right: 21px;
        }
        ul {
            list-style: none outside;
            padding: 0;
            margin: 0;
        }

        li {
            line-height: 18px;
            margin-bottom: 0px;
        }
        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));!important;
        }

        .fa-brands::before {
            display: inline-block;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
        }

        .Pinterest-P::before {
            content: ' \f231';
        }

        .fa-youtube::before {
            content: "\f16a";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .header-top-right {
                text-align: right;
        }
            .single-htr {
                display: inline-block;
                margin-left: 18px;
                position: relative;
            }
            .menu{
                background: #1a1a1a none repeat scroll 0 0;
                padding: 12px 0;
            }
        .menu ul li {
            display: inline-block;
            margin-right: 4px;
            position: relative;
        }
        .menu ul li a {
            color: #f2f2f2;
            display: inline-block;
            font-family: "Open Sans", sans-serif;
            padding: 10px;
        }

        .hero-content {
            padding-top: 188px;
            text-align: center;
        }

        .main_title {
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            font-weight: 400;
            font-size: 40px;
            margin-bottom: 6px;
            letter-spacing: 0;
            text-transform: capitalize;
            text-align: center;
        }


        .text {
            color: #fff;
            font-size: 16px;
            line-height: 20px;
            margin-bottom: 27px;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        #button{
            background: #f13b3e none repeat scroll 0 0;
            border-radius: 25px;
            display: inline-block;
            line-height: 50px;
            padding: 0 25px;
            text-transform: uppercase;
        }
        #subscribe, #subscribe:visited {
            text-decoration: none;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: normal;
            font-size: 12px;
            letter-spacing: 0;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            outline: 0;
        }


    </style>

</head>
<body>
<div >
    <!--start header-->
    <header>
    <div class="header-top">
        <div  class="container ">
                <div class="grid grid-cols-2">
{{--            <div class="grid-rows-1">--}}
{{--                <div class="container m-auto grid grid-cols-2">--}}
                    <div class=" header-top-left">
                        <ul>
                                <li><a href="#" class='Pinterest-P fontawesomeicon'><i
                                            class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#"> <i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"> <i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
            <div class="header-top-right">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a  href="{{ url('/dashboard') }}"
                               class=" single-htr text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a id="sign_in" href="{{ route('login') }}" class=" single-htr text-slate-50">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="single-htr text-slate-50">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            </div>
    </div>
        <div class="menu hidden-sm ">
            <div class="container">
            <div class="grid grid-cols-2">
                <div>
                <img src="img/logo.png">
                </div>
                <div>
                <nav>
                    <ul>
                        <li><a>Lorem</a></li>
                        <li><a>Lorem</a></li>
                        <li><a>Lorem</a></li>
                        <li><a>Lorem</a></li>
                        <li><a>Lorem</a></li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
</div>
{{--</div>--}}
{{--    </div>--}}
    </div>
    </header>
<!--main content-->

<div class="hero-section">
    <div class="container">
        <div class="grid-rows-1">
            <div class="columns-12">
                <div class="hero-content">
                    <h1 class="main_title">La tua gym app </h1>
                    <p class="text">Maximum Results in Minimum Time, no matter your location </p>
                    <button id="button"><a id="subscribe" href="#">seleziona il tuo programma</a> </button>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</body>
</html>
