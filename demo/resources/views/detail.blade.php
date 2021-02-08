@extends('layout')
@section('title')
Product
@endsection
@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4 text-capitalize">
      {{ $product['category'] }}
    <small>{{ $product['name'] }}</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">
    <div class="col-md-8">
      <img class="img-fluid" src="{{$product['gallery']}}" alt="">
    </div>

    <div class="col-md-4">
        <h3 class="my-3">Description</h3>
        <p>{{ $product['desccription'] }}</p>
        <h3 class="my-3">Price: ${{ $product['price'] }}</h3>
        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <a href="#" class="mt-2 btn btn-success">Buy Now</a>
    </div>
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Products</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

@endsection
