@extends('layouts.main')
@section('content')
    <header>
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
                {{-- <div class="row m-3">
                    <div class="col-12">
                        <p>INFORMAZIONI RISTORANTE</p>
                    </div>
                    <div class="col-12">
                        <input class="custom-input" type="text" name="" id="" placeholder="Nome Ristorante" />
                    </div>
                    <div class="col-12">
                        <input class="custom-input" type="text" name="" id="" placeholder="Ragione Sociale" />
                    </div>
                    <div class="col-12">
                        <input class="custom-input" type="text" name="" id="" placeholder="Indirizzo" />
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="text" name="" id="" placeholder="CAP" />
                    </div>
                    <div class="col-6">
                        <input class="custom-input" type="text" name="" id="" placeholder="Città" />
                    </div>
                    <div class="col-12">
                        <input class="custom-input" type="text" name="" id="" placeholder="Codice Fiscale" />
                    </div>
                    <div class="col-12">
                        <input class="custom-input" type="text" name="" id="" placeholder="Partita IVA" />
                    </div>
                    <div class="col-12">
                        <button>CARICA FOTO</button>
                    </div>
                    <div class="col-12 d-flex justify-content-end align-items-center">
                        <button type="submit">REGISTRATI</button>
                    </div>
                </div> --}}
            </form>
        </div>
    </header>
@endsection
