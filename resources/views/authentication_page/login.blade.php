@extends('layouts.master_user')

@section('content')

    <img class="position-fixed" src="{{asset("img/login_background.png")}}">
    <div class="container col-3 mt-4 text-white p-3 px-4 bg-light rounded" style="background-image: linear-gradient(#9ba6b2, rgb(75, 80, 88))">
        <div class="text-center fs-3 mb-3 fw-bold">
            Login
        </div>

        <form action="{{route("auth.loginVerification")}}" method="POST" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old("email") }}" style="background-color: #BAC7D6">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" style="background-color: #BAC7D6">
            </div>
            <div class="mb-4">
                Don't Have An Account ? <a href="" class="link-info">Sign Up</a>
            </div>
            <div class="button-container d-flex justify-content-center">
                <button type="submit" class="btn text-white col-8" style="background-color: #5C8BC3">Submit</button>
            </div>
        </form>
    </div>
@endsection
