@extends('layouts.main')


@section('content')
    <section id="show-dish">



        <div class="container p-5">
            <div class="row ">
                <div class="col-lg-6 d-flex justify-content-center align-items-center ">
                    <img id="dish-show-img" src="/img/restaurant/{{ $dish->image_url }}" alt="{{ $dish->name }}">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                    <div>
                        <h3>Nome del piatto</h3>
                        <p>{{ $dish->name }}</p>
                    </div>
                    <div>
                        <h3>Categoria</h3>
                        <p>{{ $dish->getGenre->name }}</p>
                    </div>
                    <div>
                        <h3>Prezzo</h3>
                        <h5>{{ $dish->price }} €</h5>
                    </div>
                    <div>
                        <h3>Descrizione</h3>
                        <p>{{ $dish->description }}</p>
                    </div>
                    <div>
                        <h3>Disponibilità</h3>
                        @if ($dish->visibility == '0')
                            <p>Il piatto non è disponibile per l'acquisto.</p>
                        @else
                            <p>Il piatto è disponibile per l'acquisto.</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-end">
                    <a href="{{ route('dishes.edit', $dish->id) }}">
                        <img id="icon-dish-show" src="/img/dashboard/icon/edit-little.png" alt="" />
                        MODIFICA PIATTO
                    </a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <form class="d-flex justify-content-center align-items-center" method="POST" action="{{ route('dishes.destroy', $dish->id) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit">ELIMINA PIATTO</button>
                    </form>
                </div>








            </div>
        </div>

    </section>
@endsection
