@extends('layout')

@section('content')
<h1>Storelist  page is here</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th>Operation</th>
      <!-- <th scope="col">Created</th>
      <th scope="col">Updated</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}} </th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td> <a href="/deletestore/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
      <!-- <td>{{$item->created}}</td>
      <td>{{$item->updated}}</td> -->
    </tr>
    @endforeach
  </tbody>
</table>

@stop