@extends('layout')

@section('title', 'Register User')

@section('content')
<div class="continer mt-4" style="margin-top: 2rem">
    <form action="{{route("user.do-register")}}" method="POST">
        {{ csrf_field() }}
        @include("inc.errors")
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Mobile</label>
                    <input type="text" name="mobile" class="form-control">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="">Password Confirmation</label>
                    <input type="text" name="password_confirmation" class="form-control">
                </div>
                <div class="col-md-6 mt-3">
                    <button class="btn btn-primary">Register</button>
                </div>
                <div class="col-md-12 mt-4">
                    <a href="{{route("user.login")}}">Already have an Account?</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection