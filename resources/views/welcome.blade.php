<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard Safety</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 17px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            button {
                display: inline-block;                             
                border-radius: 10px;
                border: 2px double #636b6f;
                
                text-align: center;
                letter-spacing: .1rem;
                font-size: 13px;
                padding: 8px;
                width: 100px;                
                cursor: pointer;                
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">                    
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="button-style">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Dashboard Safety 
                </div>

                <div class="links">
                    @auth                        
                        <a href="{{ route('pyramid.input') }}">Input Data Pyramid</a>
                    @endauth
                    <a href="{{ route('pyramid') }}">Pyramid</a>
                    <a href="{{ route('speedometer') }}">Speedometer</a>         
                    @auth                        
                        <a href="{{ route('speedometer.input') }}">Input Data Speedometer</a>           
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
