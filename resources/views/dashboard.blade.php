@extends('layouts.main')
@section('content')
    <DashboardComponent 
    restaurantdata="{{$restaurant}}" 
    dishesdata="{{$restaurant->getDishes}}"
    orderlist="{{ route('orders.show', $restaurant->id) }}"
    createdish="{{ route('dishes.create') }}"></DashboardComponent>

    {{-- <a href="">Edit Ristorante</a>

    <div class="card mr-3 mb-3" style="width: 35rem;">
        <div class="card-body">
            <img width="50%" alt="{{ $restaurant->name }}" src="{{ asset('/storage/' . $restaurant->image_url) }}">

            <h5 class="card-title">Nome Ristorante: {{ $restaurant->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Indirizzo: {{ $restaurant->address }}
            </h6>
            <h6 class="card-subtitle mb-2 text-muted">
                P-iva: {{ $restaurant->p_iva }}
            </h6>
            <p class="card-text">Titolare: {{ $restaurant->getRestaurateur->name }}</p>
            <h4>Cosa Serviamo:</h4>
            <ul>
                @foreach ($restaurant->getTypes as $type)
                    <li>{{ $type->name }}</li>
                @endforeach
            </ul>
            <h4>I Nostri Piatti:</h4>
            <ul>
                @foreach ($restaurant->getDishes as $dish)
                    <li><a href="{{ route('dishes.show', $dish->id) }}">{{ $dish->name }}</a></li>
                    <h5>{{ $dish->price }} euro</h5>
                @endforeach
            </ul>

            <a class="btn btn-primary" href="{{ route('orders.show', $restaurant->id) }}">Mostra
                Ordini</a>
            @if (Auth::check())
                @if (Auth::User()->id == $restaurant->getRestaurateur->id)
                    <div class="d-flex flex-column col-5 offset-3 ">
                        <h3>Opzioni del ristoratore</h3>
                        <a class="btn btn-primary" href="{{ route('dishes.create') }}">Aggiungi piatto</a>
                        <a class=" mt-1 btn btn-warning" href="{{ route('restaurant.edit', $restaurant->id) }}">MODIFICA
                            RISTORANTE</a>
                        <form method="POST" action="{{ route('restaurant.destroy', $restaurant->id) }}">
                            @csrf
                            @method("DELETE")
                            <button onclick="return confirm('Sei sicuro di voler eliminare il tuo ristorante?')"
                                type="submit" class="btn btn-danger mt-2">ELIMINA IL TUO RISTORANTE</button>
                        </form>
                    </div>

                @endif
            @endif





        </div>
    </div> --}}

@endsection
