@extends('master')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="carousel-item {{$item['id']==3 ? 'active' : ''}}">
            <img src="{{$item['gallery']}}" class="slider-img d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{$item['name']}}</h5>
              <p>{{$item['description']}}</p>
            </div>
          </div>
        @endforeach
      
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="trending-items container">
   <h2>Trending Items</h2> 
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
