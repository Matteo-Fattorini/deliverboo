@extends('layouts.main')

@section('content')
    <section id="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 login-img">
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

    {{-- <div class="container">
    <div class="row">
        <div class="col-6 p-5">
            <h1>Login ristoratore</h1>
            <div class="input">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Indirizzo Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password" class="custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="">
                            <button type="submit" class="">
                                {{ __('Login') }}
                            </button>

                        </div>
                    </div>
                </form>


            </div>
            

            

        </div>
        <div class="col-6 p-5">
            <h1>Vuoi diventare nostro partner?</h1>
            <a href="{{route('register')}}">REGISTRATI SU DELIVEBOO</a>
        </div>
    </div>
</div> --}}


@endsection
{{-- @section('con')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
