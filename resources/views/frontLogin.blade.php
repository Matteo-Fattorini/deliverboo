@extends('layouts.main')
@section('content')
    <NavComponent homelink="{{route('homePage')}}" loginlink="{{route('login')}}"></NavComponent>
    <section id="login">
        <div class="login-img"></div>
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center p-5">
                    <h1>Login Ristoratori</h1>
                    <div>
                        <form action="">
                            <input class="custom-input" type="text" name="" id="" placeholder="Username">
                            <input class="custom-input" type="text" name="" id="" placeholder="Password">
                            <button type="submit">Accedi</button>
                        </form>
                    </div>
                </div>
                <div class="col col d-flex flex-column justify-content-center align-items-center p-5 black-container">
                    <h1>Vuoi diventare nostro partner?</h1>
                    <a href="{{route('register')}}">REGISTRATI SU DELIVEBOO</a>
                </div>
            </div>
        </div>
    </section>
@endsection
