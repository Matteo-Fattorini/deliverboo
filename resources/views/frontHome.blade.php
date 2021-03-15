@extends('layouts.main')
@section('content')
    <JoinComponent></JoinComponent>
    <PartnerSectionHome style="background-image: url({{ asset('img/homepage/rider.jpg') }})"
        loginlink="{{ route('login') }}" registerlink="{{ route('register') }}" @auth
        dashboardlink="{{ route('restaurant.show', Auth::user()->getRestaurant->id) }}" @endauth
        auth="{{ Auth::check() }}">


    </PartnerSectionHome>
    <InfoSectionHome></InfoSectionHome>
@endsection
