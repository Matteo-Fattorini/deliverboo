@extends('layouts.main')
@section('content')
    <OrdersComponent ordersarr="{{$restaurant->getOrders}}">
    </OrdersComponent>
@endsection
