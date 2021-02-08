@extends('layout')
@section('title')
Product
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach( $products as $item )
                    <div class="carousel-item {{ $item['id']==1?'active':''}}">
                        <img class="slider-img img-responsive" src="{{$item['gallery']}}" class="d-block">
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
<div class="mt-3 container-fluid">
    <div class="row">
        <div class="col-12 pb-3">
            <center><h2 class="text-monospace">Trending Products</h2></center>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $item)
        <div class="col-lg-3 col-md-4 pb-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://i.guim.co.uk/img/media/2ce8db064eabb9e22a69cc45a9b6d4e10d595f06/392_612_4171_2503/master/4171.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=45b5856ba8cd83e6656fbe5c166951a4" class="d-block" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title text-decoration-none"><a class="text-dark" href="detail/{{$item['id']}}">{{ $item['name'] }}</a></h5>
                <a href="detail/{{$item['id']}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

            {{-- <div class="trending-item px-2">
                <img class="trending-image" src="https://i.guim.co.uk/img/media/2ce8db064eabb9e22a69cc45a9b6d4e10d595f06/392_612_4171_2503/master/4171.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=45b5856ba8cd83e6656fbe5c166951a4" class="d-block">
                <div class="">
                    <h5>{{ $item['name'] }}</h5>
                </div>
            </div>
        </div> --}}
        @endforeach
    </div>
</div>

@endsection
