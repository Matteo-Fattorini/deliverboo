@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row ">
            <div class="col-10  mt-5 d-flex flex-wrap justify-content-center ">
                <form action="{{ route('dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="_method" value="PUT">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Piatto</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input name="description" type="text" class="form-control" id="description"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" aria-describedby="emailHelp">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visibility" value="0" id="visibility">

                        <label class="form-check-label" for="visibility">
                            Non Disponibile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visibility" value="1" id="visibility">

                        <label class="form-check-label" for="visibility">
                            Disponibile
                        </label>
                    </div>



                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input name="image" type="file" class="form-control" id="image">

                    </div>

                    @foreach ($genres as $genre)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="{{ $genre['id'] }}"
                                id="categories1">

                            <label class="form-check-label" for="categories1">
                                {{ $genre['name'] }}
                            </label>
                        </div>
                    @endforeach


                    <button type="submit" class="btn btn-primary">Submit</button>
                    @if ($errors->any())
                        <div class="alert alert-danger mt-5">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
