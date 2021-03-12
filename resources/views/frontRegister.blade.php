@extends('layouts.main')
@section('content')
    <section id="register">
        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <h1>Registrazione di un nuovo ristorante</h1>
                </div>
            </div>
            <form action="">
                <div class="row m-3">
                    <div class="col-12">
                        <p>Account</p>
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="text" name="" id="" placeholder="Nome">
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="text" name="" id="" placeholder="Cognome" />
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="email" name="" id="" placeholder="Email" />
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="email" name="" id="" placeholder="Conferma email" />
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="password" name="" id="" placeholder="Password" />
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="password" name="" id="" placeholder="Conferma password" />
                    </div>
                    <button>
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
