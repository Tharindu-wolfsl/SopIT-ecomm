@extends('master')
@section('content')

<div class="trending-items container">
    <h2>Search Items</h2> 
    @foreach ($products as $item)
     <a href="/detail/{{$item['id']}}">
         <div class="t-item">
             <img src="{{$item['gallery']}}">
             <p>{{$item['name']}}</p>
             </div>
     </a>
   
    @endforeach
    </div>

@endsection
