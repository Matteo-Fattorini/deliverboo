@extends('layouts.main')

@section('content')
    <section id="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 login-img">
                </div>
                <div class="col-lg-6 login-box p-5">
                    <h1>Login Ristoratori</h1>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input id="email" type="email" class="custom-input @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Indirizzo Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <input id="password" type="password" class="custom-input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <div>
                            <button type="submit" class="primary-button">ACCEDI</button>
                        </div>

                    </form>
                </div>
                <div class="col-lg-6 register-box p-5">
                    <h1>Vuoi diventare nostro partner?</h1>
                    <a href="{{ route('register') }}" class="primary-button">REGISTRATI SU DELIVEBOO</a>
                </div>
            </div>
        </div>
    </section> 
@endsection
