@extends('layouts.main')
@section('content')
<JoinComponent></JoinComponent>
<PartnerSectionHome 
style="background-image: url({{asset('img/homepage/rider.jpg')}})"
loginlink="{{route('login')}}"
registerlink="{{route('register')}}">
</PartnerSectionHome>
<InfoSectionHome></InfoSectionHome>
@endsection

