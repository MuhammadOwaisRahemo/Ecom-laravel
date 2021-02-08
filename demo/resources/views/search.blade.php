@extends('layout')
@section('content')
    <div class="mt-3 container-fluid">
        <div class="row">
            <div class="col-12 pb-3">
                <center><h2 class="text-monospace">Search Results</h2></center>
            </div>
        </div>
        <div class="row">

            @foreach ($search as $item)
                <?php
                    if(!$item){
                ?>
                    <div class="col-lg-4 col-md-4 pb-3">
                        <center><h4 class="bg bg-info text-dark">No Search Found For</h4></center>
                    </div>
                <?php
                    }else { ?>
                        <div class="col-lg-3 col-md-3 pb-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ $item['gallery'] }}" class="d-block" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title text-decoration-none"><a class="text-dark" href="detail/{{$item['id']}}">{{ $item['name'] }}</a></h5>
                                <a href="detail/{{$item['id']}}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <?php  } ?>
            @endforeach
        </div>
    </div>
@endsection
