@extends('layouts.main')
@section('content')
<HeaderHome style="background-image: url({{asset('img/homepage/background_header.png')}})">
    <NavComponent slot="navbar"></NavComponent>
</HeaderHome>
<ResturantSectionHome></ResturantSectionHome>
<PartnerSectionHome></PartnerSectionHome>
<InfoSectionHome></InfoSectionHome>
@endsection