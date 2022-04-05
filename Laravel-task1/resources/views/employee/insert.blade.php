@extends('employee.layout')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $item)
        <b>{{$item}}</b><br>
    @endforeach
</div>
@endif
<form action="create" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" class="form-group" value="{{old("full_name")}}" name="full_name" placeholder="Enter Full Name">
    </div>
    <div class="form-group">
        <label for="">Enter City</label>
        <input type="text" class="form-group" value="{{old("city")}}" name="city" placeholder="Enter City">
    </div>
    <div class="form-group">
        <label for="">Your Age</label>
        <input type="number" class="form-group" value="{{old("age")}}" name="age" placeholder="Enter Age">
    </div>
    <div class="form-group">
        <label for="">Gender</label>
        <input type="text" class="form-group" value="{{old("gender")}}" name="gender" placeholder="Gender">
    </div>
    <div class="form-group">
        <label for="">Email Address</label>
        <input type="text" class="form-group" value="{{old("email_address")}}" name="email_address" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="">Date of Birth</label>
        <input type="text" class="form-group" value="{{old("date_of_birth")}}" name="date_of_birth" placeholder="Enter Date of Birth">
    </div>
    <div class="form-group">
        <button class="btn btn-success">Submit</button>
    </div>
</form>
@endsection