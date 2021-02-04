@extends('layout')
@section('title')
Product
@endsection
@section('content')
<div class="container-fluid py-0 px-0">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach( $products as $item )
                    <div class="carousel-item {{ $item['id']==1?'active':''}}">
                        <img class="slider-img" src="{{$item['gallery']}}" class="d-block">
                        <div class="carousel-caption slider-text">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['desccription'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<h1>All Products</h1>

@endsection
