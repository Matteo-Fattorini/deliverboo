@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row ">
            <div class="col-10  mt-5 d-flex flex-wrap justify-content-center ">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/storage/' . $dish->image_url) }}" class="card-img-top" alt="{{ $dish->name }}">
                    <div class="card-body">
                        <h5>{{ $dish->getGenre->name }}</h5>
                        <h5 class="card-title">{{ $dish->name }}</h5>
                        <h5 class="card-title">{{ $dish->price }} €</h5>
                        <p class="card-text">{{ $dish->description }}</p>
                        @if ($dish->visibility == '0')
                            <button disabled class="btn btn-danger">Prodotto Esaurito</button>
                        @else

                        <a class="btn btn-success mb-2"href="">Comprami!</a>

                        @endif

                        @if($dish->getRestaurant->id == Auth::User()->getRestaurant->id)
                        <a class=" mt-5 btn btn-danger"href="{{ route("dishes.edit",$dish->id) }}">MODIFICA PIATTO</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
