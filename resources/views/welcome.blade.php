<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        * {
            box-sizing: border-box;
            }

            body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
            }

            #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%; 
            min-height: 100%;
            }

            .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
            }

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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                z-index: 99;

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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                z-index: 99;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .screen-padder.full {
                position: absolute;
                left: 0px;
                top: 0px;
                width: calc(100% - 0px);
                height: calc(100% - 0px);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <!-- <video autoplay muted loop id="myVideo">
            <source src="https://d32ujqjov16ho0.cloudfront.net/direct_uploads/1473692861_Skyline.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video> -->

        <div class="content">
            <h1>Fizji Shop
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </h1>
            
            <p>
            Easy. Lean. Joy.
            </p>
        </div>

        </div>
        
        <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
        }
        </script>

    </body>
</html>
