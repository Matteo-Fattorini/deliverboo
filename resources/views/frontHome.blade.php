@extends('layouts.main')
@section('content')
    <JoinComponent></JoinComponent>
    <PartnerSectionHome style="background-image: url({{ asset('img/homepage/rider.jpg') }})"
        loginlink="{{ route('login') }}" registerlink="{{ route('register') }}" 
        @auth
        @if(isset(Auth::user()->getRestaurant))
        dashboardlink="{{ route('restaurant.show', Auth::user()->getRestaurant->id) }}" 
        @endif
        @endauth
        auth="{{ Auth::check() }}">


    </PartnerSectionHome>
    <InfoSectionHome></InfoSectionHome>
@endsection
