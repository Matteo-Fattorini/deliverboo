@extends('layouts.main')
@section('content')
<NavComponent slot="navbar"></NavComponent>
<InfoRestaurant> </InfoRestaurant>
<TypeMenu data="{{$restaurant}}"> </TypeMenu>
<PreFooter></PreFooter>

@endsection