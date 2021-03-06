<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Computer Festival 2017</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .footer {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!--@if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif-->

            <div class="top-right links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/event') }}">Event</a>
                <a href="{{ url('/registration') }}">Registration</a>
                <a href="{{ url('/contactus') }}">Contact Us</a>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Computer Festival 2017
                </div>

                <content>
                    <h1>An annual one-stop IT event held by students of Faculty of Computer Science, University of Indonesia. </h1>
                    <p> CompFest menghadirkan berbagai kompetisi IT yang dapat membawa inovasi berdaya guna bagi masyarakat, pameran IT dengan teknologi terbaru Indonesia yang dikemas dengan konsep gamifikasi, seminar mengenai berbagai macam topik terbaru IT, dan tentunya
                        Internet of Things Academy dan Startup Academy yang bertujuan untuk memajukan kreativitas pemuda-pemudi Indonesia.</p>

                    <p>Tahun ini, CompFest 2017 maju dengan membawa tema "Step Up Indonesia's IT Potentials for the Challenges of Tomorrow".</p>

                    <h2>Visi: CompFest menjadi bentuk pengabdian mahasiswa yang memberikan kebermanfaatan dalam bidang teknologi informasi dengan cara berbagi secara terbuka untuk Indonesia yang lebih maju.</h2>
                    <h2>Misi: Mewadahi, menggerakkan, dan membangun antusiasme terhadap perkembangan teknologi informasi di Indonesia melalui rangkaian akademi, event, dan kompetisi.</h2>

                    <p>For 7 years, CompFest has collaborated with: 143 Exhibitors 150 Partners 80.000 Participants</p>
                </content>
            </div>
            
        </div>
        <footer class="footer">
             Copyright Computer Festival 2017
        </footer>
    </body>
</html>
