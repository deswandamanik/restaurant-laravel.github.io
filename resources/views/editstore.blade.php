@extends('layout')

@section('content')
<div class="col-sm-6">
<h1>Edit store</h1>
<form method="post" action="/editstore">
@csrf
  <div class="form-group">
  <input type="hidden" name="id" value="{{$data->id}}">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop