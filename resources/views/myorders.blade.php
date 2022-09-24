@extends('master')
@section('content')

<div class="container cart-list">
    <h3 style="margin-bottom:20px">My orders</h3>
   
    @foreach ($orders as $item)
    <div class="row set">
        <div class="col-sm-3 item">
            <img src="{{$item->gallery}}" alt="">
        </div>
        <div class="col-sm-3 item">
            <h3>{{$item->name}}</h3>
            <p>status:{{$item->status}}</p>
            <p>address:{{$item->address}}</p>
            <p>{{$item->description}}</p>
        </div>
        <div class="col-sm-3 item">
            <p>${{$item->price}}</p>
        </div>
    </div>
    @endforeach
    
</div>


@endsection
