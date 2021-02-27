@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row ">
            <div class="col-10  mt-5 d-flex flex-wrap justify-content-center ">
                <form action ="{{ route("dishes.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="_method" value ="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Piatto</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="visibility" class="form-label">Visibility</label>
                        <input name="visibility" type="text" class="form-control" id="visibility" aria-describedby="emailHelp">
                    </div>
                    

                    
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input name="image" type="file" class="form-control" id="image" >
                        
                    </div>

                    
                    {{-- <div class="mb-3 form-check">
                        @foreach ($types as $type )
                            
                                    
                                <div class="form-check ">
                                    <input class="form-check-input" name="types[]" type="checkbox" value="{{ $type["id"] }}" id="type">
                                    <label class="form-check-label" for="type">
                                    {{ $type['name'] }}
                                    </label>
                                </div>
                                
                        @endforeach
                        
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
