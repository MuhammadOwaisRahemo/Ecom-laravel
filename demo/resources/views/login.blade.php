@extends('layout')
@section('title')
Login
@endsection
@section('content')
<div class="container  py-5">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-outline-dark btn-default">Login</button>
            </form>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12"></div>
    </div>
</div>
@endsection
