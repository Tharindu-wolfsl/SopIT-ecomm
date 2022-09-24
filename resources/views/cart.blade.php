@extends('master')
@section('content')

<div class="container cart-list">
    <h3 style="margin-bottom:20px">Products in cart</h3>
    <a style="margin-bottom:20px" class="btn btn-success" href="orders">Order Now</a>
    @foreach ($products as $item)
    <div class="row set">
        <div class="col-md-2 item">
            <img src="{{$item->gallery}}" alt="">
        </div>
        <div class="col-md-2 item">
            <h6>{{$item->name}}</h6>
            <p>{{$item->description}}</p>
        </div>
        <div class="col-md-2 item">
            <p>{{$item->price}}</p>
        </div>
        <div class="col-md-2 item">
            <a style="color:white" href="/delete_item/{{$item->cart_id}}" class="btn btn-warning">Remove Item</a>
        </div>
    </div>
    @endforeach
    <a style="margin-top:20px" class="btn btn-success" href="orders">Order Now</a>
</div>


@endsection
