@extends('master')
@section('content')

<div class="container detail-page mt-5 mb-5">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}" >
        </div>
        <div class="col-sm-6 detail-box">
            <a href="/" class="btn btn-danger">go back</a>
            <h2>{{$products['name']}}</h2>
            <h5>price:$ {{$products['price']}}</h5>
            <p>category:{{$products['category']}}</p>
            <p>description:{{$products['description']}}</p>
            <form action="/add_to_cart" method="POST">
                @csrf
                    <input type="hidden" name="product_id" value={{$products['id']}}>
                <button class="btn btn-primary" type="submit">Add to card</button>
            </form>
            
            <button class="btn btn-success">Buy product</button>
        </div>
    </div>
</div>


@endsection
