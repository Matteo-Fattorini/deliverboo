@extends('layouts.main')
@section('content')
<JoinComponent homelink="{{route('homePage')}}" loginlink="{{route('login')}}"></JoinComponent>
<PartnerSectionHome style="background-image: url({{asset('img/homepage/rider.jpg')}})"></PartnerSectionHome>
<InfoSectionHome></InfoSectionHome>
@endsection