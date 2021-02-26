@extends('layouts.app')


@section('content')


    <div class="container">
        <a class="btn btn-secondary"href="{{ route("restaurant.index") }}">Torna Indietro</a>
        <div class="row ">
            <div class="col-8 offset-2 mt-5 d-flex flex-wrap justify-content-center ">
                @foreach ($restaurant->getOrders as $order)


                    <div class="card mr-3 mb-3" style="width: 35rem;">
                        <div class="card-body">
                            
                            <h5 class="card-title">ID ordine: {{ $order->id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Ordine del: {{ $order->created_at }} 
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Totale: {{ $order->total }} €
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Nome Cliente: {{ $order->client_name }} {{ $order->client_surname }}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Email: {{ $order->client_email }}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Telefono: {{ $order->client_phone }}
                            </h6>
                            
                            <h6 class="card-subtitle mb-2 text-muted">
                                Indirizzo: {{ $order->client_address }}
                            </h6>
                            
                            <h4>Scontrino:</h4>
                            <ul>
                                @foreach ($order->getDishes as $dish) 
                                <li>{{ $dish->name }} --- {{ $dish->price }}€</li>     
                                @endforeach
                            </ul>

                            
                          

                            



                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




























    {{-- @foreach ($restaurants->getTypes as $type)
    @dd($type->getRestaurants)
    
@endforeach


 @foreach ($restaurants->getOrders as $order)
        <h4>{{ $order->client_name }}</h4>
        <h4>{{ $order->client_surname }}</h4>
        <h4>{{ $order->client_email }}</h4>
        <h4>{{ $order->client_phone }}</h4>
        <h4>{{ $order->client_address }}</h4>
        <h1>{{ $order->getRestaurant->name }}</h1>
        <br>
    @foreach ($order->getDishes as $dish) 
         <h4>{{ $dish->name }}</h4>
         <h4>{{ $dish->price }} euro</h4>
         <h4>{{ $dish->description }}</h4>
         <h4>ristorante: {{ $dish->getRestaurant->name }}</h4>
         <h4> genere: {{ $dish->getGenre->getDishes->pluck("name") }}</h4>
         
        
    @endforeach
     
 @endforeach --}}


    {{-- <h1>{{ $restaurants->name }}</h1>
@foreach ($restaurants->getTypes as $type)
    <h5>{{ $type->name }}</h5>
@endforeach
"--------------------------"
@foreach ($restaurants->getDishes as $dish)
    <h5>{{ $dish->name }}</h5>
    @foreach ($dish->getOrders as $order)
         {{ $order->id }}
         {{ $order->client_name }}
        
@endforeach

@foreach ($orders as $order){
    @foreach ($order->getDishes as $dishes)
           {{ $dishes->getRestaurant->id }}
        
    @endforeach
}
    
@endforeach


@endforeach --}}




    {{-- @foreach ($restaurants as $restaurant)
    <div class="card" style="width: 18rem;">
  <h2>immagine: {{ $restaurant->image_url }}</h2>
  <div class="card-body">
    <h5 class="card-title">{{ $restaurant->name }}</h5>
    <p class="card-text">{{ $restaurant->address }}</p>
    <p> test-getrestaurator: {{ $restaurant->getRestaurateur->getRestaurant->name }}</p>
    <h5>Test Tipi</h5>
    @foreach ($restaurant->getTypes as $type)
        <h5>{{ $type->name }}</h5>
    @endforeach
    <br>
    <h5>Test Piatti</h5>
    @foreach ($restaurant->getorders as $dish)
        <h5>{{ $dish->name }}</h5>
        <h5> test genere: {{ $dish->getGenre->name}}</h5>
        <h5>test restaurant: {{ $dish->getRestaurant->name }}</h5>
        
        
            
    @endforeach
   
    <br>

    
  </div>
</div>
@endforeach --}}


@endsection
