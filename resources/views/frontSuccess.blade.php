@extends('layouts.main')
@section('content')
    <SuccessPage style="background-image: url({{asset('img/succes/bg_success.png')}})">
        <NavComponent slot="navbar" homelink="{{route('homePage')}}" loginlink="{{route('login')}}"></NavComponent>
    </SuccessPage>
@endsection