@extends('layouts.main')


@section('content')

<section id="orders-dashboard">
    @foreach ($restaurant->getOrders as $order)
        <div class="container p-5 mb-3">
            <div class="row ">
                <div class="col-12 justify-content-start align-items-center">
                    <h5 class="card-title">ID ordine: {{ $order->id }}</h5>
                </div>
                <div class="col-12">
                    <h3>Data Ordine</h3>
                    <p>{{ $order->created_at }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 d-flex justify-content-start align-items-center">
                    <h3>Dati Cliente</h3>
                </div>

                <div class="col-3 d-flex flex-column justify-content-start align-items-start">
                    <h5>Nome e Cognome</h5>
                    <p>{{ $order->client_name }} {{ $order->client_surname }}</p>
                </div>
                <div class="col-3 d-flex flex-column justify-content-start align-items-start">
                    <h5>Email</h5>
                    <p>{{ $order->client_email }}</p>
                </div>
                <div class="col-3 d-flex flex-column justify-content-start align-items-start">
                    <h5>Telefono</h5>
                    <p>{{ $order->client_phone }}</p>
                </div>
                <div class="col-3 d-flex flex-column  justify-content-start align-items-start">
                    <h5>Indirizzo di consegna</h5>
                    <p>{{ $order->client_address }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <h3>Prodotti Acquistati</h3>
                </div>
                @foreach ($order->getDishes as $dish)

                    <div class="col-2">
                        <h5>{{ $dish->name }}</h5>
                        <p>{{ $dish->price }}€</p>
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <h3>Totale</h3>
                </div>
                <div class="col-12">
                    <p>{{ $order->total }} €</p>
                </div>
            </div>
        </div>
    @endforeach
</section>




























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
