<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex justify-content-between align-items-center">
                        <img src="/images/logo_black.png" alt="">
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        <ul
                            class="d-flex justify-content-between align-items-center d-flex justify-content-between align-items-center ">
                            <li><a>Home</a></li>
                            <li>Aiuto</li>
                            @guest
                                <li><a href="{{ route('login') }}">Login Ristoratori</a></li>
                                <li><a href="{{ route('register') }}">Registrati</a></li>
                            @endguest
                            @if (Auth::check())
                                @if(isset(Auth::user()->getRestaurant))
                                <li><a>DASH</a></li>
                                @endif
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <input type="submit" value="Logout">
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
        <FooterComponent style="background-color: #000"></FooterComponent>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
