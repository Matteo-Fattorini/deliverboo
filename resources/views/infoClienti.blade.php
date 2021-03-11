@extends('layouts.main')


@section('content')

<div class="container ">
    <div class="row">
        <div class="col-6 primary-text ml-30">
            <h1>Inserisci i dati <br> e vai al pagamento</h1>
        </div>
    </div>
</div>

<div class="container inputForm ">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="">INFORMAZIONI CLIENTE</label>
        <div class="form-group  row d-flex">
            <div class="col-6 ">
                <input id="name" placeholder="Nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-6">
                <input id="surname" placeholder="Cognome" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group d-flex  row">
            <div class="col-6">
                <input id="email"  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="col-6">
                <input id="tel" placeholder="Cellulare" type="text" class="form-control" name="tel" required autocomplete="new-cel">
            </div>
        </div>

       <label for="">INDIRIZZO CONSEGNA</label>

       <div class="form-group  row">
          <div class="col-12">
            <input id="address" placeholder="Indirizzo" type="text" class="form-control" name="adress" required>
          </div>
       </div>
       <div class="form-group  row">

        <div class="col-2">
          <input id="Cap" placeholder="CAP" type="" class="form-control" name="cap" required>
        </div>

        <div class="col-4">
            <input id="city" placeholder="Città" type="text" class="form-control" name="city" required>
          </div>

          <div class="col-6">
            <input id="Info" placeholder="Citofono, Interno, Piano" type="text" class="form-control" name="info" required>
          </div>

     </div>

     <div class="form-group d-flex  row">
        <div class="col-12">
            <input id="order"  type="hidden" class="form-control" name="order" value='' required>
          </div>
          <div class="col-12">
            <input id="totalprice"  type="hidden" class="form-control" name="order" value='' required>
          </div>
    </div>

        

        <div class="form-group  row ">
            <div class="col-12  mb-50">
                <button type="submit" class="btn black-button">
                    VAI AL PAGAMENTO
                </button>
            </div>
        </div>
    </form>
</div>



<Prefooter></Prefooter>

@endsection


<script>

</script>